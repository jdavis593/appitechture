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
Espo.define('Views.Import.Step3', 'View', function (Dep) {
	
	return Dep.extend({
		
		template: 'import.step-3',
		
		data: function () {
			return {
				result: this.result,
				scope: this.scope
			};		
		},
		
		events: {
			'click button[data-action="revert"]': function () {
				this.revert();
			},
		},
		
		setup: function () {
			this.formData = this.options.formData;
			this.scope = this.formData.entityType;
			
			this.result = this.options.result || {};
		},
		
		revert: function () {
			this.notify('Please wait...');
			
			this.$el.find('[data-action="revert"]').addClass('disabled');			
			
			$.ajax({
				type: 'POST',
				url: 'Import/action/revert',
				data: JSON.stringify({
					entityType: this.formData.entityType,
					idsToRemove: this.result.importedIds
				}),
				timeout: 150000,
				success: function (result) {
					Espo.Ui.success(this.translate('Reverted', 'labels', 'Import'));
					this.$el.find('[data-action="revert"]').remove();
				}.bind(this)
			});
		}		
					
	});
});
