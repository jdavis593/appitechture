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

Espo.define('Views.Stream.Notes.Create', 'Views.Stream.Note', function (Dep) {

	return Dep.extend({

		template: 'stream.notes.create',
		
		assigned: false,
		
		messageName: 'create',
		
		data: function () {
			return _.extend({
				statusText: this.statusText,
				statusStyle: this.statusStyle
			}, Dep.prototype.data.call(this));
		},
		
		setup: function () {			
			if (this.model.get('data')) {
				var data = JSON.parse(this.model.get('data'));
	
				this.assignedUserId = data.assignedUserId || null;
				this.assignedUserName = data.assignedUserName || null;
				
				this.messageData['assignee'] = '<a href="#User/view/' + this.assignedUserId + '">' + this.assignedUserName + '</a>';
				
				if (this.assignedUserId) {
					this.messageName = 'createAssigned';
					if (!this.isUserStream) {
						this.messageName += 'This';	
					}
				}
				
				if (this.isUserStream) {
					if (this.assignedUserId == this.getUser().id) {
						this.messageData['assignee'] = this.translate('you');
					}
				}				
				
				if (data.statusField) {
					var statusField = this.statusField = data.statusField;
					var statusValue = data.statusValue;			
					this.statusStyle = data.statusStyle || 'default';						
					this.statusText = this.getLanguage().translateOption(statusValue, statusField, this.model.get('parentType'));
				}				
			}
			
			this.createMessage();			
		},		
	});
});

