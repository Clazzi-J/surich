<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			@yield('title')
		</title>
		<meta name="robots" content="noimageindex"></meta>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		@yield('css')
	</head>
	<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
		@yield('body')
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		@yield('js')
</html>
