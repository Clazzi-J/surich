@extends('layout.userMaster')

@section('title','User`s Hub')

@section('css')

@endsection

@section('body')
	<form action="{{ url('user/search') }}" method="post">
		{{ csrf_field() }}


		@if ($errors->has('message'))
			<p>{{ $errors->first() }}</p>
		@endif
		<input type="text" name="email" placeholder="E-mail">
		<input type="submit" class="btn btn-primary" value="Search for account">
	</form>
@endsection
