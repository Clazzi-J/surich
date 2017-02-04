@extends('layout.master')

@section('title')
	Register Admin
@endsection

@section('css')
	<link rel="stylesheet" href="{{ asset('css/adminregister.css') }}">
@endsection

@section('body')
	<div class="container-fluid">
		<form action="postregister" method="post">
			{{csrf_field()}}
			<div class="col-md-12">
				<h1 style="text-align:center">Admin Registration</h1>
			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-default">
						@foreach ($errors->all() as $error)
							<p>{{ $error }}</p>
						@endforeach
						<h3 style="text-align:center">Please complete the information</h3>
						<div class="panel-body">
							<input class="form-control half-width-form-control" type="text" name="fname" placeholder="First Name" value="{{ old('fname') }}">
						</div>
						<div class="panel-body">
							<input class="form-control half-width-form-control" type="text" name="lname" placeholder="Last Name" value="{{ old('lname') }}">
						</div>
						<div class="panel-body">
							<input class="form-control" type="text" name="email" placeholder="E-mail" value="{{ old('email') }}">
						</div>
						<div class="panel-body">
							<input class="form-control" type="text" name="address" placeholder="Address" value="{{ old('address') }}">
						</div>
						<div class="panel-body">
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">+63</span>
								<input type="text" class="form-control" name="contact" placeholder="Mobile Number" value="{{ old('contact') }}">
							</div>
						</div>
						<div class="panel-body">
							<input class="form-control" type="password" name="password" placeholder="Password">
						</div>
						<div class="panel-body">
							<input class="form-control" type="password" name="password_confirmation" placeholder="Re-type Password">
						</div>
					</div>
					<button type="button" class="btn btn-danger">Cancel</button>
					<button type="submit" class="btn btn-success">Register</button>

				</div>
			</div>
		</form>
	</div>
@endsection

@section('js')

@endsection
