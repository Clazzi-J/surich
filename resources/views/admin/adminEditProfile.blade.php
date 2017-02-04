@extends('layout.master')

@section('title')
	{{ $user->fname }}{{ $user->lname }} Profile
@endsection


@section('body')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<img src="{{ asset('img/avatar'.$user->image->file_name) }}" alt="{{ $user->image['file_name'] }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
				<h2>{{ $user->fname }}'s Profile</h2>
				<form action="{{ url('admin/avataredit/'.$user->id) }}" enctype="multipart/form-data" method="post">
					@if ($errors->has('message'))
						<label style="color:red">Update Valid Avatar</label>
					@else
						<label>Update Profile Avatar</label>
					@endif

					<input type="file" name="avatar">

					{{csrf_field()}}
					<input type="submit" class="btn btn-sm btn-primary pull-right" value="Upload Image">
				</form>

				<form action="{{ url('admin/postedit/'.$user->id) }}" method="post">
						{{csrf_field()}}
					<hr>
					<div class="panel-body">
						<input class="form-control half-width-form-control" type="text" name="fname" placeholder="First Name" value="{{ $user->fname }}">
					</div>
					<div class="panel-body">
						<input class="form-control half-width-form-control" type="text" name="lname" placeholder="Last Name" value="{{ $user->lname }}">
					</div>
					<div class="panel-body">
						<input class="form-control" type="text" name="email" placeholder="E-mail" value="{{ $user->email }}">
					</div>
					<div class="panel-body">
						<input class="form-control" type="text" name="address" placeholder="Address" value="{{ $user->address }}">
					</div>
					<div class="panel-body">
						<input type="text" class="form-control" name="contact" placeholder="Mobile Number" value="{{ $user->contact }}">
					</div>
					@if ($errors->has('error'))
						<div class="panel-body has-error has-feedback">
							<input class="form-control" type="password" name="password" placeholder="Old Password (please enter password to save the changes)">
						</div>
					@else
						<div class="panel-body">
							<input class="form-control" type="password" name="password" placeholder="Old Password (please enter password to save the changes)">
						</div>
					@endif
					@if ($errors->has('newpassword'))
						<div class="panel-body has-error has-feedback">
							<input class="form-control" type="password" name="newpassword" placeholder="Re-type Password">
						</div>
						<div class="panel-body has-error has-feedback">
							<input class="form-control" type="password" name="newpassword_confirmation" placeholder="Re-type Password">
						</div>
					@else
						<div class="panel-body">
							<input class="form-control" type="password" name="newpassword" placeholder="New Password (Please input the old password to save changes)">
						</div>
						<div class="panel-body">
							<input class="form-control" type="password" name="newpassword_confirmation" placeholder="Re-type New Password">
						</div>
					@endif

					<a href="{{url('admin/dashboard')}}"><button type="button" class="btn btn-danger">Back to Dashboard</button></a>
					<button type="submit" class="btn btn-success">Update</button>
				</form>
			</div>
		</div>
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
