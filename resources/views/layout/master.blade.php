<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			@yield('title')
		</title>
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/master.css') }}">
		<link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
		@yield('css')
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ url('admin') }}">Admin
						@yield('fname')
						@yield('lname')
					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				@yield('nav-colapse')
			</div><!-- /.container-fluid -->
		</nav>
		@yield('body')
	</body>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	@yield('js')
</html>
