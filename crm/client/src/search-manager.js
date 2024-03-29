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

	Espo.SearchManager = function (collection, type, storage, dateTime, defaultData) {
		this.collection = collection;
		this.scope = collection.name;
		this.storage = storage;
		this.type = type || 'list';
		this.dateTime = dateTime;
		
		this.data = this.default = defaultData || {
			textFilter: '',			
			bool: {},
			basic: {name: true},
			advanced: {},
		};
	};
	
	_.extend(Espo.SearchManager.prototype, {
	
		data: null,
		
		getWhere: function () {		
			var where = [];			
		
			if (this.data.textFilter && this.data.textFilter != '') {
				where.push({
					type: 'textFilter',
					value: this.data.textFilter
				});
			}
						
			if (this.data.bool) {
				var o = {
					type: 'boolFilters',
					value: [],
				};
				for (var name in this.data.bool) {
					if (this.data.bool[name]) {
						o.value.push(name);
					}
				}
				if (o.value.length) {
					where.push(o);
				}		
			}
			
			if (this.data.advanced) {
				for (var name in this.data.advanced) {
					var field = name;
					var defs = this.data.advanced[name];
					
					if (!defs) {
						continue;
					}
					
					
					if ('where' in defs) {
						where.push(defs.where);
					} else {					
						if ('field' in defs) {
							field = defs.field;
						}						
						var type = defs.type;						
						if (defs.dateTime) {
							where.push(this.getDateTimeWhere(type, field, defs.value));
						} else {
							value = defs.value;
							where.push({
								type: type,
								field: field,
								value: value,
							});
						}				

					}
				}
			}
			return where;
		},		
		
		loadStored: function () {
			this.data = this.storage.get(this.type + 'Search', this.scope) || _.clone(this.default);			
			return this;
		},
		
		get: function () {
			return this.data;
		},
		
		setAdvanced: function (advanced) {
			this.data.advanced = advanced;
		},
		
		set: function (data) {
			this.data = data;
			if (this.storage) {
				this.storage.set(this.type + 'Search', this.scope, data);
			}
		},
		
		reset: function () {
			this.data = _.clone(this.default);
			if (this.storage) {
				this.storage.clear(this.type + 'Search', this.scope);
			}
		},
		
		getDateTimeWhere: function (type, field, value) {
			var where = {
				field: field
			};
			if (!value && !~['today', 'past', 'future'].indexOf(type)) {
				return null;
			}
					
			switch (type) {
				case 'today':
					where.type = 'between';
					var start = this.dateTime.getNowMoment().startOf('day').utc();
														
					var from = start.format(this.dateTime.internalDateTimeFormat);						
					var to = start.add('days', 1).format(this.dateTime.internalDateTimeFormat);
					where.value = [from, to];
					break;
				case 'past':
					where.type = 'before';
					where.value = this.dateTime.getNowMoment().utc().format(this.dateTime.internalDateTimeFormat);
					break;
				case 'future':
					where.type = 'after';
					where.value = this.dateTime.getNowMoment().utc().format(this.dateTime.internalDateTimeFormat);
					break;
				case 'on':
					where.type = 'between';
					var start = moment(value, this.dateTime.internalDateFormat, this.timeZone).utc();
					
					var from = start.format(this.dateTime.internalDateTimeFormat);
					var to = start.add('days', 1).format(this.dateTime.internalDateTimeFormat);
									
					where.value = [from, to];
					break;
				case 'before':
					where.type = 'before';					
					where.value = moment(value, this.dateTime.internalDateFormat, this.timeZone).utc().format(this.dateTime.internalDateTimeFormat);
					break;
				case 'after':
					where.type = 'after';					
					where.value = moment(value, this.dateTime.internalDateFormat, this.timeZone).utc().format(this.dateTime.internalDateTimeFormat);
					break;
				case 'between':
					where.type = 'between';	
					if (value[0] && value[1]) {
						var from = moment(value[0], this.dateTime.internalDateFormat, this.timeZone).utc().format(this.dateTime.internalDateTimeFormat);
						var to = moment(value[1], this.dateTime.internalDateFormat, this.timeZone).utc().format(this.dateTime.internalDateTimeFormat);
						where.value = [from, to];
					}
					break;						
			}
			
			return where;
		},
	});

}).call(this, Espo, _);
