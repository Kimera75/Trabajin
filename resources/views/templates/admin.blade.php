<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" href="css/vendor/bootstrap.min.css">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
</head>
<body>

	<div class="hidden" id="nowLoading">
		<div class="centrarLoading">
			<i class="fa fa-spinner fa-spin fa-4x fa-fw"></i>
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 section-header">
		<figure class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-4">
			<img src="img/logo.jpg" alt="" class="img-responsive">
		</figure>
	</div>

	@yield('content');


	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/login.js"></script>
</body>
</html>