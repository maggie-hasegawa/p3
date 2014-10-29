<!DOCTYPE html>
<html>
	<head>
		<title>Developer's Best Friend</title>
		<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('bootstrap/css/amelia-theme.css') }}" rel="stylesheet">
		<link href="{{ asset('css/common.css') }}" rel="stylesheet">
		<script src="{{ asset('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js') }}"</script>
		<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"</script>
	</head>
	<body>
	    <div class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header">
				<a class="navbar-brand" href="/">Home</a>
			</div>
			<div id="navbar-main" class="navbar-collapse collapse navbar-responsive-collapse">
				<ul class="nav navbar-nav">
					<li><a href="/lorem">Lorem Ipsum</a></li>
					<li><a href="/users">Users</a></li>
				</ul>	
			</div>
		</div>
			<div class="container">
				<div id="banner" class="page-header">
					@yield('banner')
				</div>
				<div class="bs-docs-section clearfix">
					@yield('content')
				</div>
			</div>
	</body>
</html>