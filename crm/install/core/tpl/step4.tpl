<header class="panel-heading">
	<h4 class="panel-title main-title">{$langs['labels']['Step4 page title']}</h4>
</header>
<div class="panel-body body">
	<div id="msg-box" class="alert hide"></div>
	<div class="loading-icon hide"></div>
	<form id="nav">
		<div class="row">
			<div class="col-md-8" style="width:100%" >
				<div class="row">
					<div class="cell cell-dateFormat  col-sm-6  form-group">
						<label class="field-label-dateFormat control-label">
							{$langs['fields']['Date Format']}
						</label>
						<div class="field field-dateFormat">
							<select name="dateFormat" class="form-control main-element">
								{foreach from=$settingsDefaults['dateFormat'].options item=lbl key=val}
									{if $val == $fields['dateFormat'].value}
										<option selected="selected" value="{$val}">{$lbl}</option>
									{else}
										<option value="{$val}">{$lbl}</option>
									{/if}
								{/foreach}
							</select>
						</div>
					</div>
										
					<div class="cell cell-timeFormat  col-sm-6  form-group">
						<label class="field-label-timeFormat control-label">
							{$langs['fields']['Time Format']}
						</label>
						<div class="field field-timeFormat">
							<select name="timeFormat" class="form-control main-element">
								{foreach from=$settingsDefaults['timeFormat'].options item=lbl key=val}
									{if $val == $fields['timeFormat'].value}
										<option selected="selected" value="{$val}">{$lbl}</option>
									{else}
										<option value="{$val}">{$lbl}</option>
									{/if}
								{/foreach}
							</select>
						</div>
					</div>						
				</div>			
									
				<div class="row">
					<div class="cell cell-timeZone  col-sm-6  form-group">
						<label class="field-label-timeZone control-label">
							{$langs['fields']['Time Zone']}
						</label>
						<div class="field field-timeZone">
							<select name="timeZone" class="form-control main-element"> 
								{foreach from=$settingsDefaults['timeZone'].options item=lbl key=val}
									{if $val == $fields['timeZone'].value}
										<option selected="selected" value="{$val}">{$lbl}</option>
									{else}
										<option value="{$val}">{$lbl}</option>
									{/if}
								{/foreach}
							</select>
						</div>
					</div>
				
					<div class="cell cell-weekStart  col-sm-6  form-group">
						<label class="field-label-weekStart control-label">
							{$langs['fields']['First Day of Week']}
						</label>
						<div class="field field-weekStart">
							<select name="weekStart" class="form-control main-element"> 
								{foreach from=$settingsDefaults['weekStart'].options item=lbl key=val}
									{if $val == $fields['weekStart'].value}
										<option selected="selected" value="{$val}">{$lbl}</option>
									{else}
										<option value="{$val}">{$lbl}</option>
									{/if}
								{/foreach}
							</select>
						</div>
					</div>
				</div>			
									
				<div class="row">
					<div class="cell cell-defaultCurrency  col-sm-6  form-group">
						<label class="field-label-defaultCurrency control-label">
							{$langs['fields']['Default Currency']}
						</label>
						<div class="field field-defaultCurrency">
							<select name="defaultCurrency" class="form-control main-element"> 
								{foreach from=$settingsDefaults['defaultCurrency'].options item=lbl key=val}
									{if $val == $fields['defaultCurrency'].value}
										<option selected="selected" value="{$val}">{$lbl}</option>
									{else}
										<option value="{$val}">{$lbl}</option>
									{/if}
								{/foreach}
							</select>
						</div>
					</div>
				</div>			
					
				<div class="row">
					<div class="cell cell-thousandSeparator  col-sm-6  form-group">
						<label class="field-label-thousandSeparator control-label">
							{$langs['fields']['Thousand Separator']}
						</label>
						<div class="field field-thousandSeparator">
							<input type="text" class="main-element form-control" name="thousandSeparator" value="{$fields['thousandSeparator'].value}">
						</div>
					</div>
					
					<div class="cell cell-decimalMark  col-sm-6  form-group">
						<label class="field-label-decimalMark control-label">
							{$langs['fields']['Decimal Mark']} *</label>
						<div class="field field-decimalMark">
							<input type="text" class="main-element form-control" name="decimalMark" value="{$fields['decimalMark'].value}">
							</div>
					</div>
				</div>			
						
				<div class="row">	
					<div class="cell cell-language  col-sm-6  form-group">
						<label class="field-label-language control-label">
							{$langs['fields']['Language']}
						</label>
						<div class="field field-language">
							<select name="language" class="form-control main-element"> 
								{foreach from=$settingsDefaults['language'].options item=lbl key=val}
									{if $val == $fields['language'].value}
										<option selected="selected" value="{$val}">{$lbl}</option>
									{else}
										<option value="{$val}">{$lbl}</option>
									{/if}
								{/foreach}
							</select>
						</div>
					</div>
				</div>			
			</div>
		</div>
	</form>			
</div>
<footer class="modal-footer">
	<button class="btn btn-default" type="button" id="back">{$langs['labels']['Back']}</button>
	<button class="btn btn-primary" type="button" id="next">{$langs['labels']['Next']}</button>
</footer>
<script>
	{literal}
	$(function(){
	{/literal}
		var langs = {$langsJs};
	{literal}
		var installScript = new InstallScript({action: 'step4', langs: langs});
	})
	{/literal}
</script>
