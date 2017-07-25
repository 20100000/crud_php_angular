<!DOCTYPE html>
<html ng-app="FLYERBD">
<head>
	<title>FLYERBD</title>

	<script src="<?php echo base_url() ?>assets/js/jquery.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Teste PHP Thutor</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->

		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>
<div class="container">
		
		<div class="row">
			<div class="col-lg-12">
				<div ng-view>

				</div>
			</div>
		</div>
</div>


<script src="<?php echo base_url() ?>assets/angular/angular.min.js"></script>
<script src="<?php echo base_url() ?>assets/angular/route.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/ui-bootstrap-custom-tpls-2.0.1.min.js"></script>

<script src="<?php echo base_url() ?>assets/js/app.js"></script>
<script src="<?php echo base_url() ?>assets/node_modules/oclazyload/dist/ocLazyLoad.js"></script>


</body>
</html>