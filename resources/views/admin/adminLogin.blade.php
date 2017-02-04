<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Login</title>
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/adminlogin.css') }}">
		<link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
	</head>

	<body>

			<div class="container-table container">
				<div class="row vertical-center-row">
					<form class="" action="admin/postlogin" method="post">
						<div class="panel panel-default">
							{{ csrf_field() }}


							@if ($errors->has('message'))
								<div class="header-message">
									<h1>Admin Login Portal  <i class="fa fa-lock" aria-hidden="true"></i></h1>
								</div>
								<p>{{ $errors->first() }}</p>
								<div class="panel-body  has-error has-feedback">
									<input class="form-control" type="text" name="email" placeholder="E-mail" value="{{ old('email') }}">
								</div>
								<div class="panel-body  has-error has-feedback">
									<input class="form-control" type="password" name="password" placeholder="Password">
								</div>
							@else
								<div class="header-message">
									<h1>Admin Login Portal  <i class="fa fa-lock" aria-hidden="true"></i></h1>
								</div>
								<div class="panel-body">
									<input class="form-control" type="text" name="email" placeholder="E-mail" value="{{ old('email') }}">
								</div>
								<div class="panel-body">
									<input class="form-control" type="password" name="password" placeholder="Password">
								</div>
							@endif

						</div>
					<button type="button" class="btn btn-danger">Cancel</button>
					<button type="submit" class="btn btn-success">Login</button>
					</form>
				</div>
			</div>

	</body>
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>
