<header class="panel-heading">
	<h4 class="panel-title">{$langs['labels']['Step3 page title']}</h4>
</header>
<div class="panel-body body">
	<div id="msg-box" class="alert hide"></div>
	<div class="loading-icon hide"></div>
	<form id="nav">
		<div class="row">

			<div class=" col-md-6">
				<div class="row">
					<div class="cell cell-website col-sm-12 form-group">
						<label class="field-label-website control-label">{$langs['fields']['User Name']} *</label>
						<div class="field field-website">
							<input type="text" value="{$fields['user-name'].value}" name="user-name" class="main-element form-control">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="cell cell-website col-sm-12 form-group">
						<label class="field-label-website control-label">{$langs['fields']['Password']} *</label>
						<div class="field field-website">
							<input type="password" value="{$fields['user-pass'].value}" name="user-pass" class="main-element form-control">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="cell cell-website col-sm-12 form-group">
						<label class="field-label-website control-label">{$langs['fields']['Confirm Password']} *</label>
						<div class="field field-website">
							<input type="password" value="{$fields['user-confirm-pass'].value}" name="user-confirm-pass" class="main-element form-control">
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
		var opt = {
			action: 'step3',
			langs: {$langsJs},
			modRewriteUrl: '{$modRewriteUrl}',
			serverType: '{$serverType}',
			OS: '{$OS}'
		}
	{literal}
		var installScript = new InstallScript(opt);
	})
	{/literal}
</script>
