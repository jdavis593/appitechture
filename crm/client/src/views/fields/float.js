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

Espo.define('Views.Fields.Float', 'Views.Fields.Int', function (Dep) {

	return Dep.extend({

		type: 'float',
		
		editTemplate: 'fields.float.edit',
	
		decimalMark: '.',
	
		thousandSeparator: ',',
		
		validations: ['required', 'float', 'range'],
	
		setup: function () {
			Espo['Views.Fields.Int'].prototype.setup.call(this);			
		
			if (this.getPreferences().has('decimalMark')) {
				this.decimalMark = this.getPreferences().get('decimalMark') 
			} else {
				if (this.getConfig().has('decimalMark')) {
					this.decimalMark = this.getConfig().get('decimalMark') 
				}
			}				
			if (this.getPreferences().has('thousandSeparator')) {
				this.thousandSeparator = this.getPreferences().get('thousandSeparator') 
			} else {
				if (this.getConfig().has('thousandSeparator')) {
					this.thousandSeparator = this.getConfig().get('thousandSeparator') 
				}
			}
		},
	
		getValueForDisplay: function () {
			var value = this.model.get(this.name) || null;
			return this.formatNumber(value);
		},
		
		formatNumber: function (value) {
			if (value !== null) {
				var parts = value.toString().split(".");
				parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, this.thousandSeparator);
				return parts.join(this.decimalMark);
			}
			return '';
		},
	
		defineMaxLength: function () {
		},		
	
		validateFloat: function () {
			var value = this.model.get(this.name);
			if (isNaN(value)) {
				var msg = this.translate('fieldShouldBeFloat', 'messages').replace('{field}', this.translate(this.name, 'fields', this.model.name));
				this.showValidationMessage(msg);
				return true;
			}
		},
		
		parse: function (value) {
			value = (value !== '') ? value : null;			
			if (value !== null) {
				value = value.split(this.thousandSeparator).join('');
				value = value.split(this.decimalMark).join('.');
				value = parseFloat(value);
			}
			return value;
		},
	
		fetch: function () {
			var value = this.$el.find('[name="'+this.name+'"]').val();
			value = this.parse(value);				
		
			var data = {};
			data[this.name] = value;
			return data;
		},
	});
});

