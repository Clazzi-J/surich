@extends('layout.master')

@section('title')
	Admin Dashboard
@endsection

@section('css')
	<link rel="stylesheet" href="{{asset('css/adminDashboard.css')}}">
@endsection

@section('fname')
	{{ $user->fname }}
@endsection

@section('lname')
	{{ $user->lname }}
@endsection



@section('nav-colapse')
	<div class="pull-right collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h1 style="padding:0; margin:0;display:inline;position:absolute;margin-top:-10px;margin-left:-45px;"><img style="max-width:30px" src="{{ asset('img/avatar/'.$user->image->file_name) }}" alt="{{ $user->image['file_name'] }}"></h1></i>  My Account <span class="caret"></span></a>
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
		<div class="row">
			<a href="{{ url('admin/viewall') }}">
			<div class="thumbnail col-md-4">
				<img src="{{ asset('img/admin.jpg') }}" alt="View All Admins">
				<div class="caption">
					<h3>View All Admin</h3>
				</div>
			</div>
			</a>
		</div>
	</div>

@endsection
