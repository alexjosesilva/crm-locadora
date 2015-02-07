
<html>
	<head>
		<title>Bootstrap 2.0 Modal Demo</title>
		<link href="http://static.scripting.com/github/bootstrap2/css/bootstrap.css" rel="stylesheet">
		<script src="http://static.scripting.com/github/bootstrap2/js/jquery.js"></script>
		<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-transition.js"></script>
		<script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-modal.js"></script>
		<style>
			.divDemoBody  {
				width: 60%;
				margin-left: auto;
				margin-right: auto;
				margin-top: 100px;
				}
			.divDemoBody p {
				font-size: 18px;
				line-height: 140%;
				padding-top: 12px;
				}
			.divDialogElements input {
				font-size: 18px;
				padding: 3px; 
				height: 32px; 
				width: 500px; 
				}
			.divButton {
				padding-top: 12px;
				}
			</style>
		<script>
			$(document).ready(function() {
				$('#windowTitleDialog').bind('show', function () {
					document.getElementById ("xlInput").value = document.title;
					});
				});
			function closeDialog () {
				$('#windowTitleDialog').modal('hide'); 
				};
			function okClicked () {
				document.title = document.getElementById ("xlInput").value;
				closeDialog ();
				};
			</script>
		</head>
	<body>
		<div class="divDemoBody">
			<h1>Bootstrap 2.0 Modal Demo</h1>
			<p>A simple demo of a <a href="http://twitter.github.com/bootstrap/javascript.html#modals">modal dialog</a> in Bootstrap 2.0.</p>
			<p>1. Click the button. 2. Enter a new title for the window. 3. Click OK.</p><script language="JavaScript" type="text/javascript">
	var imageUrl = "http://counters.scripting.com/counters/count.gif";
	var imageTag = "<img src=\"" + imageUrl + "?group=bootstrap2ModalDemoStatic&referer=" + escape (document.referrer) + "\" height=\"1\" width=\"1\">";
	document.write (imageTag);
	</script>

			<p>We set the title of the window and close the dialog.</p>
			<div id="windowTitleDialog" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="windowTitleLabel" aria-hidden="true">
				<div class="modal-header">
					<a href="#" class="close" data-dismiss="modal">&times;</a>
					<h3>Alterar Filme</h3>
					</div>
				<div class="modal-body">
					
					<div class="divDialogElements">
						<form action="teste.php" method="post">
							<input class="xlarge" id="x1" name="x1" type="text" />
						
							<input class="xlarge" id="x2" name="x2" type="text" />
						
							<input class="xlarge" id="x3" name="x3" type="text" />
						</form>
					</div>
					
				</div>
					
				<div class="modal-footer">
					<a href="#" class="btn" onclick="closeDialog ();">Cancel</a>
					<a href="#" class="btn btn-primary" onclick="okClicked ();">OK</a>
					</div>
				</div>
			<div class="divButtons">
				<a data-toggle="modal" href="#windowTitleDialog" class="btn btn-primary btn-large">Modal</a>
				</div>
			<p>Note -- See <a href="http://bootstrapdemos.scripting.com/">this page</a> for a list of my Bootstrap demos.</p>
			</div>
		</body>
