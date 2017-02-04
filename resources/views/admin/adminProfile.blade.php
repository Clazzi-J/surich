@extends('layout.master')

@section('title')
	{{ $user->fname }}{{ $user->lname }} Profile
@endsection

@section('css')
	<link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('fname')
	{{ Auth::user()->fname }}
@endsection

@section('lname')
	{{ Auth::user()->lname }}
@endsection

@section('body')

	<h1>First Name: {{$user->fname}}</h1>
	<h1>Last Name: {{$user->lname}}</h1>
	<h1>Email: {{$user->email}}</h1>
	<h1>Address:{{ $user->address}}</h1>
	<h1>Mobile Number: {{$user->contact}}</h1>
	<img style="max-width:200px;border-radius:100%;" src="{{ asset('img/avatar'.$user->image->file_name) }}" alt="{{ $user->image['file_name'] }}">
@endsection

@section('nav-colapse')
	<div class="pull-right collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><h1 style="padding:0; margin:0;display:inline;position:absolute;margin-top:-10px;margin-left:-45px;"></h1></i>  My Account <span class="caret"></span></a>
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
