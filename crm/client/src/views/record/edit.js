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

Espo.define('Views.Record.Edit', 'Views.Record.Detail', function (Dep) {

	return Dep.extend({

		template: 'record.edit',

		type: 'edit',

		name: 'edit',

		fieldsMode: 'edit',
		
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

		sideView: 'Record.EditSide',

		bottomView: null,
		
		actionSave: function () {
			this.save();
		},
		
		actionCancel: function () {
			this.cancel();		
		},
		
		cancel: function () {
			this.exit('cancel');
		},

	});
});


