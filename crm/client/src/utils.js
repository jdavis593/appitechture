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
(function (Espo, _) {

	Espo.Utils = {
	
		checkActionAccess: function (acl, model, item) {
			var hasAccess = true;
			if (item.acl) {
				if (!item.aclScope) {
					if (model) {
						hasAccess = acl.checkModel(model, item.acl);
					} else {
						hasAccess = acl.check(item.scope, item.acl);
					}
				} else {
					hasAccess = acl.check(item.aclScope, item.acl);
				}
			}
			return hasAccess;
		},

		convert: function (string, p) {
			if (string == null) {
				return string;
			}

			var result = string;
			switch (p) {
				case 'c-h':
				case 'C-h':
					result = Espo.Utils.camelCaseToHyphen(string);
					break;
				case 'h-c':
					result = Espo.Utils.hyphenToCamelCase(string);
					break;
				case 'h-C':
					result = Espo.Utils.hyphenToUpperCamelCase(string);
					break;
			}
			return result;
		},
		
		isObject: function (obj) {
			if (obj === null) {
				return false;
			}
			return typeof obj === 'object';
		},
		
		clone: function (obj) {
			if (!Espo.Utils.isObject(obj)) {
				return obj;
			}
			return _.isArray(obj) ? obj.slice() : _.extend({}, obj);
		},
		
		cloneDeep: function (data) {
			data = Espo.Utils.clone(data);
			
			if (Espo.Utils.isObject(data) || _.isArray(data)) {				
				for (var i in data) {
					data[i] = this.cloneDeep(data[i]);
				}					
			} 
			return data;
		},

		/**
		 * Compose class name.
		 * @param {String} module
		 * @param {String} name
		 * @param {String} location
		 * @return {String}
		 */
		composeClassName: function (module, name, location) {
			if (module) {
				return module + ':' + location + '.' + name;
			} else {
				return location + '.' + name;
			}
		},

		composeViewClassName: function (name) {
			if (name.indexOf(':') != -1) {
				var arr = name.split(':');
				var modPart = arr[0];
				var namePart = arr[1];
				return modPart + ':' + 'Views' + '.' + namePart;
			} else {
				return 'Views' + '.' + name;
			}
		},

		toDom: function (string) {
			return Espo.Utils.convert(string, 'c-h').split('.').join('-');
		},

		upperCaseFirst: function (string) {
			if (string == null) {
				return string;
			}
			return string.charAt(0).toUpperCase() + string.slice(1);
		},

		hyphenToUpperCamelCase: function (string) {
			if (string == null) {
				return string;
			}
			return this.upperCaseFirst(string.replace(/-([a-z])/g, function (g) {return g[1].toUpperCase();}));
		},

		hyphenToCamelCase: function (string) {
			if (string == null) {
				return string;
			}
			return string.replace(/-([a-z])/g, function (g) {return g[1].toUpperCase();});
		},

		camelCaseToHyphen: function (string) {
			if (string == null) {
				return string;
			}
			return string.replace(/([a-z])([A-Z])/g, '$1-$2').toLowerCase();
		},

		trimSlash: function (str) {
			if (str.substr(-1) == '/') {
				return str.substr(0, str.length - 1);
			}
			return str;
		}
	};

}).call(this, Espo, _);

