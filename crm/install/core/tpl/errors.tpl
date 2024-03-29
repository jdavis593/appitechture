<header class="panel-heading">
	<h4 class="panel-title">{$langs['labels']['Errors page title']}</h4>
</header>
<div class="panel-body body">
	<div id="msg-box" class="alert alert-danger">{$errors}</div>
	<div class="loading-icon hide"></div>
	<form id="nav">
		<div class="row">
			<div class=" col-md-13">
				<div class="panel-body" align="center">
				</div>
			</div>
		</div>
	</form>
</div>
<footer class="modal-footer">
	<button class="btn btn-primary" type="button" id="re-check">{$langs['labels']['Re-check']}</button>
</footer>
<script>
	{literal}
	$(function(){
	{/literal}
		var opt = {
			action: 'errors',
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
