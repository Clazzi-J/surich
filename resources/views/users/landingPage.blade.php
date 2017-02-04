@extends('layout.userMaster')

@section('title',$user->slug.' Salespage')

@section('css')
	<link rel="stylesheet" href="{{asset('css/landingPage.css')}}">
@endsection
@section('body')
	<div class="container-fluid">
		<div class="row header">
			<div class="col-md-12">
				<a href="{{ url('user/introductionpage/'.$user->slug) }}" class="img"><img src="{{ asset('img/lp/surichLogo.png') }}" alt="surich Logo"></a>
			</div>
			<div class="col-md-12">
				<h1 class="welcome-message">Welcome to Surich Team HATAW</h1>
			</div>
			<div class="col-md-2 col-md-offset-2 profile-picture">
				<img src="{{ asset('img/avatar/'.$user->image->file_name) }}" alt="">
			</div>
			<div class="col-md-6 info">
				<div class="col-md-12">
					<h4>Hello I'm <span id="name">{{ $user->fname.' '.$user->lname }}</span></h4>
					<h4>Distributor and Supplier of original 5in1 Scalar Stickers,</h4>
					<h4> to know the complete details and how to order,</h4>
					<h4>you can contact me directly at {{ $user->contact }}</h4>
				</div>
				<div class="col-md-12">
					<div class="col-md-7 col-md-offset-1 social-message">
						<h4>Add me to my facebook now</h4>
					</div>
					<div class="col-md-1">
					<h1 id="social"><a href="{{ $user->fb_link }}"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
