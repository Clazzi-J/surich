@extends('layout.master')

@section('title')
	List of all Admins
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


@section('body')

	<div class="container">
		<h1 style="text-align:center">List of all admin</h1>
			@foreach ($admins as $admin)
				<a href="profile/{{ $admin->slug }}" class="thumbnail" style="border 3px solid rgba(0,0,0,0.5) !mportant">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<img src="{{ asset('img/avatar'.$admin->image->file_name) }}" alt="{{ $admin->image['file_name'] }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
							<div class="col-xs-6 col-md-3">
								<h4>Name: {{ $admin->fname. $admin->lname }}</h4>
								<h4>Type: Admin</h4>
								<h4>Contact Number: {{ $admin->contact }}</h4>
							</div>
							<div class="col-xs-6 col-md-3">
								<h4>E-mail: {{ $admin->email }} </h4>
							</div>
						</div>
					</div>
				</a>
			@endforeach
	</div>
@endsection
