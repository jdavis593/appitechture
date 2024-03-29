/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM - Open Source CRM application.
 * Copyright (C) 2014  Yuri Kuznetsov, Taras Machyshyn, Oleksiy Avramenko
 * Website: http://www.espocrm.com
 *
 * EspoCRM is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * EspoCRM is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with EspoCRM. If not, see http://www.gnu.org/licenses/.
 ************************************************************************/ 

Espo.define('Views.Fields.Email', 'Views.Fields.Base', function (Dep) {

	return Dep.extend({

		type: 'email',
		
		editTemplate: 'fields.email.edit',
		
		detailTemplate: 'fields.email.detail',
		
		listTemplate: 'fields.email.list',
		
		searchTemplate: 'fields.email.search',
		
		validations: ['required', 'emailData'],		
	
		validateEmail: function () {
			if (this.model.get(this.name)) {	
				var re = /\S+@+\S+/;
				if (!re.test(this.model.get(this.name))) {				
					var msg = this.translate('fieldShouldBeEmail', 'messages').replace('{field}', this.translate(this.name, 'fields', this.model.name));
					this.showValidationMessage(msg);
					return true;
				}
			}
		},
		
		validateEmailData: function () {
			var data = this.model.get(this.dataFieldName);
			if (data && data.length) {			
				var re = /\S+@+\S+/;
				var notValid = false;
				data.forEach(function (row, i) {
					var emailAddress = row.emailAddress;
					if (!re.test(emailAddress)) {				
						var msg = this.translate('fieldShouldBeEmail', 'messages').replace('{field}', this.translate(this.name, 'fields', this.model.name));
						this.showValidationMessage(msg, 'div.email-address-block:nth-child(' + (i + 1).toString() + ') input');
						notValid = true;
					}
				}, this);
				if (notValid) {
					return true;
				}
			}
		},
		
		validateRequired: function () {
			if (this.params.required || this.model.isRequired(this.name)) {
				if (this.model.get(this.name) === '') {
					var msg = this.translate('fieldIsRequired', 'messages').replace('{field}', this.translate(this.name, 'fields', this.model.name));
					this.showValidationMessage(msg, 'div.email-address-block:nth-child(1) input');
					return true;
				}
			}
		},
		
		data: function () {
			var emailAddressData;
			if (this.mode == 'edit') {						
				emailAddressData = Espo.Utils.clone(this.model.get(this.dataFieldName));
	
				if (this.model.isNew() || !this.model.get(this.name)) {			
					if (!emailAddressData || !emailAddressData.length) {
		 				emailAddressData = [{
							emailAddress: '',
							primary: true,
							optOut: false,
							invalid: false
						}];
					}
				}
			} else {
				emailAddressData = this.model.get(this.dataFieldName) || false;
			}
			return _.extend({
				emailAddressData: emailAddressData
			}, Dep.prototype.data.call(this));
		},
		
		events: {
			'click [data-action="mailTo"]': function (e) {
				this.mailTo($(e.currentTarget).data('email-address'));
			},
			'click [data-action="switchEmailProperty"]': function (e) {
				var $target = $(e.currentTarget);
				var $block = $(e.currentTarget).closest('div.email-address-block');
				var property = $target.data('property-type');
				
				
				if (property == 'primary') {
					if (!$target.hasClass('active')) {
						if ($block.find('input.email-address').val() != '') {
							this.$el.find('button.email-property[data-property-type="primary"]').removeClass('active').children().addClass('text-muted');
							$target.addClass('active').children().removeClass('text-muted');
						}
					}				
				} else {
					if ($target.hasClass('active')) {
						$target.removeClass('active').children().addClass('text-muted');
					} else {
						$target.addClass('active').children().removeClass('text-muted');
					}
				}
				this.fetchToModel();		
			},
			
			'click [data-action="removeEmailAddress"]': function (e) {
				var $block = $(e.currentTarget).closest('div.email-address-block');
				if ($block.parent().children().size() == 1) {
					$block.find('input.email-address').val('');
				} else {				
					this.removeEmailAddressBlock($block);
				}
				this.fetchToModel();
			},
			
			'change input.email-address': function (e) {
				var $input = $(e.currentTarget);
				var $block = $input.closest('div.email-address-block');
				
				if ($input.val() == '') {
					if ($block.parent().children().size() == 1) {
						$block.find('input.email-address').val('');
					} else {				
						this.removeEmailAddressBlock($block);
					}
				}
				
				this.fetchToModel();
			},

			'click [data-action="addEmailAddress"]': function () {			
				var data = Espo.Utils.cloneDeep(this.fetchEmailAddressData());				
		
				o = {
					emailAddress: '',
					primary: data.length ? false : true,
					optOut: false,
					invalid: false
				};
				
				data.push(o);				
				
				this.model.set(this.dataFieldName, data, {silent: true});
				this.render();				
				
			},
			
		},
		
		removeEmailAddressBlock: function ($block) {					
			var changePrimary = false;
			if ($block.find('button[data-property-type="primary"]').hasClass('active')) {
				changePrimary = true;
			}					
			$block.remove();
			
			if (changePrimary) {
				this.$el.find('button[data-property-type="primary"]').first().addClass('active').children().removeClass('text-muted');
			}
			
			this.manageButtonsVisibility();
		},
		
		afterRender: function () {
			Dep.prototype.afterRender.call(this);
			this.manageButtonsVisibility();
		},
		
		manageButtonsVisibility: function () {
			var $primary = this.$el.find('button[data-property-type="primary"]');
			var $remove = this.$el.find('button[data-action="removeEmailAddress"]');
			if ($primary.size() > 1) {
				$primary.removeClass('hidden');
				$remove.removeClass('hidden');
			} else {
				$primary.addClass('hidden');
				$remove.addClass('hidden');				
			}
		},
		
		mailTo: function (emailAddress) {
			this.notify('Loading...');
				this.createView('quickCreate', 'Modals.ComposeEmail', {
					attributes: {
						status: 'Draft',
						to: emailAddress
					},
				}, function (view) {
					view.render();
					view.notify(false);
				});
		},
		
		setup: function () {
			this.dataFieldName = this.name + 'Data';
			
			if (this.mode == 'detail' || this.mode == 'edit') {
				this.listenTo(this.model, 'change:' + this.dataFieldName, function () {
					this.render();
				}, this);
			}
		},		
		
		fetchEmailAddressData: function () {
			var data = [];
			
			var $list = this.$el.find('div.email-address-block');
			
			if ($list.size()) {			
				$list.each(function (i, d) {
					var row = {};
					var $d = $(d);
					row.emailAddress = $d.find('input.email-address').val();
					if (row.emailAddress == '') {
						return;
					}
					row.primary = $d.find('button[data-property-type="primary"]').hasClass('active');
					row.optOut = $d.find('button[data-property-type="optOut"]').hasClass('active');
					row.invalid = $d.find('button[data-property-type="invalid"]').hasClass('active');
					data.push(row);				
				}.bind(this));
			}
			
			return data;
		},

		
		fetch: function () {
			var data = {};	
			
			var adderssData = this.fetchEmailAddressData();		
			data[this.dataFieldName] = adderssData;			
			data[this.name] = null;			
			if (adderssData.length) {
				data[this.name] = adderssData[0].emailAddress;
			}		
			
			return data;
		},
		
		fetchSearch: function () {
			var value = this.$element.val() || null;
			if (value) {
				var data = {
					type: 'like',
					value: value + '%',
					valueText: value
				};
				return data;
			}
			return false;				
		},
	});
});

