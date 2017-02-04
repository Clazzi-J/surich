@extends('layout.master')

@section('title')
	Register Admin
@endsection

@section('css')
	<link rel="stylesheet" href="{{ asset('css/adminregister.css') }}">
@endsection
@section('fname')
	{{-- {{ $user->fname }} --}}
@endsection

@section('lname')
	{{-- {{ $user->lname }} --}}
@endsection


@section('body')
	<div class="container-fluid">
		<form action="postregister" method="post">
			{{csrf_field()}}
			<div class="col-md-12">
				<h1 style="text-align:center">Admin Registration</h1>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
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
							<input class="form-control" type="text" name="facebook_link" placeholder="Address" value="{{ old('facebook_link') }}">
						</div>
						<div class="panel-body">
							<div class="input-group">
								<span class="input-group-addon" id="basic-addon1">+63</span>
								<input type="text" class="form-control" name="contact" placeholder="Mobile Number" value="{{ old('contact') }}">
							</div>
						</div>
						<div class="panel-body">
							<input class="form-control" type="password" name="password" placeholder="Password" value="password">
						</div>
						<div class="panel-body">
							<input class="form-control" type="password" name="password_confirmation" placeholder="Re-type Password" value="password">
						</div>
					</div>
					<a href="dashboard"><button type="button" class="btn btn-danger">Back to Dashboard</button></a>
					<button type="submit" class="btn btn-success">Register</button>

				</div>
			</div>
		</form>
	</div>
@endsection

@section('nav-colapse')
	<div class="pull-right collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h1 style="padding:0; margin:0;display:inline;position:absolute;margin-top:-10px;margin-left:-45px;"><img style="max-width:30px" src="{{ asset('img/avatar'.$user->image->file_name) }}" alt="{{ $user->image['file_name'] }}"></h1></i>  My Account <span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li>
						{{-- <a href="{{ url('admin/profile/'.$user->fname.'-'.$user->lname) }}"><i class="fa fa-cogs" aria-hidden="true"></i>    Edit Profile</a></li> --}}
						<a href="{{ url('admin/editprofile/'.Auth()->user()->id.'') }}"><i class="fa fa-cogs" aria-hidden="true"></i>    Edit Profile</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="{{url('admin/logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i>    Logout</a></li>
				</ul>
			</li>
		</ul>
		</ul>
	</div><!-- /.navbar-collapse -->
@endsection
