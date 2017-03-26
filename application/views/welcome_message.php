<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('_snippets/meta'); ?>
	<?php $this->load->view('_snippets/head_resources'); ?>
	<style>
		.space-h {
			display: inline-block;
			width: 5px;
		}
		
		#panel-bs > .panel-heading,
		#panel-fa > .panel-heading,
		#panel-ps > .panel-heading {
			color: #fff;
		}

		#panel-bs {
			border-color: #563D7C;
		}

		#panel-bs > .panel-heading {
			background: #563D7C;
			border-color: #563D7C;
		}

		#panel-fa {
			border-color: #1EA176;
		}

		#panel-fa > .panel-heading {
			background: #1EA176;
			border-color: #1EA176;
		}

		#panel-ps {
			border-color: #FF851B;
		}

		#panel-ps > .panel-heading {
			background: #FF851B;
			border-color: #FF851B;
		}
	</style>
</head>
<body>
<!-- .container start -->
<div class="container">
	<div class="page-header">
		<h1>Welcome to CodeIgniter!</h1>
		<p>Loaded packages:</p>
		<div class="btn-group">
			<a id="btn-jq" href="http://jquery.com/" target="_blank"><i class="fa fa-code"></i> jQuery</a><span class="space-h"></span>
			<a id="btn-bs" href="http://getbootstrap.com/" target="_blank"><i class="fa fa-css3 fa-fw"></i> Bootstrap</a><span class="space-h"></span>
			<a id="btn-fa" href="http://fontawesome.io//" target="_blank"><i class="fa fa-flag fa-fw"></i> Font Awesome</a><span class="space-h"></span>
			<a id="btn-ps" href="http://parsleyjs.org/" target="_blank"><i class="fa fa-check fa-fw"></i> Parsley JS</a><span class="space-h"></span>
			<a id="btn-gulp" href="http://gulpjs.com/" target="_blank"><i class="fa fa-terminal fa-fw"></i> Gulp JS</a>
		</div>
	</div>

	<!-- .panel-info start -->
	<div id="panel-ci" class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="panel-title">Things to take note</h2>
		</div>
		<div class="panel-body">
			<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

			<p>If you would like to edit this page you'll find it located at:</p>
			<code>application/views/welcome_message.php</code>

			<p>The corresponding controller for this page is found at:</p>
			<code>application/controllers/Welcome.php</code>

			<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
		</div>
		<div class="panel-footer">
			Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
		</div>
	</div>
	<!-- .panel-info end -->
	<hr/>

	<!-- test bootstrap panel start -->
	<div id="panel-bs" class="panel panel-default">
		<div class="panel-heading">
			<h2 class="panel-title">Test Bootstrap</h2>
		</div>
		<div class="panel-body">
			<h3>Bootstrap CSS</h3>
				<p>
					Normal<span class="space-h"></span>
					<span class="text-muted">Muted</span><span class="space-h"></span>
					<span class="text-primary">Primary</span><span class="space-h"></span>
					<span class="text-danger">Danger</span><span class="space-h"></span>
					<span class="text-warning">Warning</span><span class="space-h"></span>
					<span class="text-success">Success</span><span class="space-h"></span>
					<span class="text-info">Info</span>
				</p>
				<p>
					<button class="btn btn-default">Default</button><span class="space-h"></span>
					<button class="btn btn-primary">Primary</button><span class="space-h"></span>
					<button class="btn btn-danger">Danger</button><span class="space-h"></span>
					<button class="btn btn-warning">Warning</button><span class="space-h"></span>
					<button class="btn btn-success">Success</button><span class="space-h"></span>
					<button class="btn btn-info">Info</button><span class="space-h"></span>
				</p>
				<p>
					<button class="btn btn-primary btn-xs">Extra Small</button><span class="space-h"></span>
					<button class="btn btn-primary btn-sm">Small</button><span class="space-h"></span>
					<button class="btn btn-primary">Normal</button><span class="space-h"></span>
					<button class="btn btn-primary btn-lgxs">Large</button><span class="space-h"></span>
				</p>
			<br/>

			<h3>Bootstrap JS</h3>
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
				Launch Demo Modal
			</button>

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Test Modal</h4>
						</div>
						<div class="modal-body">
							...
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- test bootstrap panel end -->

	<!-- test font-awesome panel start -->
	<div id="panel-fa" class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Test Font Awesome</h3>
		</div>
		<div class="panel-body">
			<p>
				<i class="fa fa-flag fa-3x"></i><span class="space-h"></span>
				<i class="fa fa-pencil-square-o fa-3x"></i><span class="space-h"></span>
				<i class="fa fa-trash fa-3x"></i><span class="space-h"></span>
				<i class="fa fa-plus fa-3x"></i><span class="space-h"></span>
				<i class="fa fa-eye fa-3x"></i>
			</p>
		</div>
	</div>
	<!-- test font-awesome panel end -->

	<!-- test parsley js start -->
	<div id="panel-ps" class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Test Parsley JS</h3>
		</div>
		<div class="panel-body">
			<div class="col-sm-12 col-sm-offset-0 col-md-6 col-md-offset-3">
				<form id="form" method="post" action="" data-parsley-validate>
					<div class="form-group">
						<label class="control-label" for="name">Name</label>
						<input class="form-control" type="text" id="name" name="name" required />
					</div>

					<div class="form-group">
						<label class="control-label" for="tel">Mobile No</label>
						<input class="form-control" type="text" id="tel" name="tel" required />
					</div>

					<button class="btn btn-primary btn-lg btn-block" type="submit"><i class="fa fa-check fa-fw"></i> Submit</button>
					<button class="btn btn-default btn-block" type="submit" onClick="cancel()"><i class="fa fa-times fa-fw"></i> Cancel</button>
				</form>
			</div>
		</div>
	</div>
	<!-- test parsley js end -->

	<div style="height: 50px">&nbsp;</div>
</div>
<!-- .container end -->
<?php $this->load->view('_snippets/body_resources'); ?>
<script>
	function cancel()
	{
		$('#name').val('');
		$('#tel').val('');
	}
</script>
</body>
</html>