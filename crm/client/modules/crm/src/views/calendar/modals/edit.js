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

Espo.define('Crm:Views.Calendar.Modals.Edit', 'Views.Modals.Edit', function (Dep) {

	return Dep.extend({

		template: 'crm:calendar.modals.edit',

		scopeList: [
			'Meeting',
			'Call',
			'Task',
		],
		
		data: function () {
			return {
				scopeList: this.scopeList,
				scope: this.scope,
				isNew: !(this.id)
			};
		},
		
		events: {
			'change .scope-switcher input[name="scope"]': function () {					
				this.notify('Loading...');
				var scope = $('.scope-switcher input[name="scope"]:checked').val();
				this.scope = scope;
				this.getModelFactory().create(this.scope, function (model) {
					model.populateDefaults();						
					var attributes = this.getView('edit').fetch();
					attributes = _.extend(attributes, this.getView('edit').model.toJSON());
					model.set(attributes);
					this.createEdit(model, function (view) {												
						view.render();
						view.notify(false);
					});					
				}.bind(this));
			},
		},
		
		disableButtons: function () {
		
		},

		setup: function () {
			if (!this.options.id && !this.options.scope) {			
				this.options.scope = this.getConfig().get('calendarDefaultEntity', this.scopeList[0]);
			}
			Dep.prototype.setup.call(this);
			
			if (!this.id) {
				this.header = this.translate('Create', 'labels', 'Calendar');
			}
			
			if (this.id) {			
				this.buttons.splice(1, 0, {
					name: 'remove',
					text: this.translate('Remove'),
					style: 'danger',
					onClick: function (dialog) {									
						var model = this.getView('edit').model;
											
						if (confirm(this.translate('Are you sure?'))) {	
							var $buttons = dialog.$el.find('.modal-footer button');		
							$buttons.addClass('disabled');		
							model.destroy({
								success: function () {
									this.trigger('after:destroy', model);
									dialog.close();
								}.bind(this),
								error: function () {
									$buttons.removeClass('disabled');
								},
							});
						}
					}.bind(this)
				});
			}
			
			this.once('after:save', function (model) {
				var parentView = this.getParentView(); 
				if (!this.id) {
					parentView.addModel.call(parentView, model);
				} else {
					parentView.updateModel.call(parentView, model);
				}
			}.bind(this));
			
			this.once('after:destroy', function (model) {
				var parentView = this.getParentView();
				parentView.removeModel.call(parentView, model);				
			}.bind(this));
		},
	});
});

