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

Espo.define('Views.Dashlets.Abstract.Base', 'View', function (Dep) {

	return Dep.extend({

		optionsView: 'Dashlets.Options.Base',

		defaultOptions: null,

		optionsData: null,

		actionRefresh: function () {
			this.setup();
			this.render();
		},

		actionOptions: function () {},

		optionsFields: {
			'title': {
				type: 'varchar',
				required: true,
			},
			'autorefreshInterval': {
				type: 'enumFloat',
				options: [0, 0.5, 1, 2, 5, 10],
			},
		},

		init: function () {
			this.defaultOptions = _.extend({
				title: this.getLanguage().translate(this.name, 'dashlets'),
			}, this.defaultOptions || {});
			
			
			var options = _.clone(this.defaultOptions);
			
			for (var key in options) {
				if (typeof options[key] == 'function') {
					options[key] = options[key].call(this);
				} 
			}

			var storedOptions = this.getPreferences().getDashletOptions(this.options.id) || {};
			
			this.optionsData = _.extend(options, storedOptions);
			
			if (this.optionsData.autorefreshInterval || false) {
				var interval = this.optionsData.autorefreshInterval * 60000;				
				
				var t;				
				var process = function () {
					t = setTimeout(function () {
						this.actionRefresh();
						process();									
					}.bind(this), interval);
				}.bind(this);
				
				process();
				
				this.once('remove', function () {
					clearTimeout(t);
				}, this);
			}
		},

		getOption: function (key) {
			return this.optionsData[key];
		},
	});
});


