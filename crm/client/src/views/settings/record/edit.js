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

Espo.define('Views.Settings.Record.Edit', 'Views.Record.Edit', function (Dep) {

	return Dep.extend({

		sideView: null,
		
		layoutName: 'settings',

		buttons: [
			{
				name: 'save',
				label: 'Save',
				style: 'primary',
			},
			{
				name: 'cancel',
				label: 'Cancel',
			}
		],
		
		setup: function () {
			Dep.prototype.setup.call(this);
			
			this.listenTo(this.model, 'after:save', function () {
				this.getConfig().set(this.model.toJSON());
				this.getConfig().storeToCache();
			}.bind(this));
		},

		afterRender: function () {
			Dep.prototype.afterRender.call(this);
			
			var currencyListField = this.getFieldView('currencyList');
			var defaultCurrencyField = this.getFieldView('defaultCurrency');
			if (currencyListField && defaultCurrencyField) {
				this.listenTo(currencyListField, 'change', function () {
					var data = currencyListField.fetch();
					var options = data.currencyList;
					defaultCurrencyField.params.options = options;
					defaultCurrencyField.render();
				}.bind(this));
			}
		},

		exit: function (after) {
			if (after == 'cancel') {
				this.getRouter().navigate('#Admin', {trigger: true});
			}
		},
	});
});

