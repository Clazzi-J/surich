@extends('layout.userMaster')

@section('title','User Registration team HATAW')

@section('css')
	<link rel="stylesheet" href="{{asset('css/userRegister.css')}}">
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
@endsection

@section('body')

<div class="container">
	<form method="post" class="form-signin form1" runat="server" action="{{ url('user/postregister') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
	<div class="col-md-6">
		<div class="card card-container">
		<p id="profile-name" class="profile-name-card"></p>
		<img id="blah" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png"  />
		@if ($errors->has('avatar'))
			<p style="color:red">Avatar is required</p>
			<input type="file" name="avatar" onchange="readURL(this);" value="Upload Avatar">
		@else

			<input type="file" class="file" name="avatar" onchange="readURL(this);" value="Upload Avatar">
		@endif
		@if ($errors->has('fname'))
			<div class="has-error has-feedback">
				<input type="text" style="margin-top:10px" name="fname" id="inputEmail" class="form-control" placeholder="First Name"value="{{ old('fname') }}" >
			</div>
		@else
			<input type="text" style="margin-top:10px" name="fname" id="inputEmail" class="form-control" placeholder="First Name" value="{{ old('fname') }}">
		@endif

		@if ($errors->has('lname'))
			<div class="has-error has-feedback">
				<input type="text" name="lname" id="inputEmail" class="form-control" placeholder="Last Name"value="{{ old('lname') }}" >
			</div>
		@else
			<input type="text" name="lname" id="inputEmail" class="form-control" placeholder="Last Name" value="{{ old('lname') }}">
		@endif

		@if ($errors->has('email'))
			<div class="has-error has-feedback">
				<input type="text" name="email" id="inputEmail" class="form-control" placeholder="E-mail Name"value="{{ old('email') }}" >
			</div>
		@else
			<input type="text" name="email" id="inputEmail" class="form-control" placeholder="E-mail Name"value="{{ old('email') }}" >
		@endif

		@if ($errors->has('address'))
			<div class="has-error has-feedback">
				<input type="text" name="address" id="inputEmail" class="form-control" placeholder="Address" value="{{ old('address') }}">
			</div>
		@else
			<input type="text" name="address" id="inputEmail" class="form-control" placeholder="Address" value="{{ old('address') }}">
		@endif
		@if ($errors->has('contact'))
			<div class="has-error has-feedback">
				<input type="text" name="contact" id="inputEmail" class="form-control" placeholder="Contact Number"value="{{ old('contact') }}" >
			</div>
		@else
			<input type="text" name="contact" id="inputEmail" class="form-control" placeholder="Contact Number"value="{{ old('contact') }}" >
		@endif
		<div id="remember" class="checkbox">
	                      <label>
	                      </label>
	                  </div>
	          </div><!-- /card-container -->
	</div>
	<div class="col-md-6">
		<div class="card card-container">
				<span id="reauth-email" class="reauth-email"></span>
				@if ($errors->has('fb_link'))
					<div class="has-error has-feedback">
						<input type="text" name="fb_link" id="inputEmail" class="form-control" placeholder="Fb Link (ex. facebook.com/surichteamhataw)"  value="{{ old('fb_link') }}">
					</div>
				@else
					<input type="text" name="fb_link" id="inputEmail" class="form-control" placeholder="Fb Link (ex. facebook.com/surichteamhataw)"  value="{{ old('fb_link') }}">
				@endif
				@if ($errors->has('password'))
					<div class="has-error has-feedback">
						<input type="password" name="password" id="inputEmail" class="form-control" placeholder="Password">
					</div>
				@else
					<input type="password" name="password" id="inputEmail" class="form-control" placeholder="Password">
				@endif
				@if ($errors->has('password'))
					<div class="has-error has-feedback">
						<input type="password" name="password_confirmation" id="inputEmail" class="form-control" placeholder="Re-Type Password">
					</div>
				@else
					<input type="password" name="password_confirmation" id="inputEmail" class="form-control" placeholder="Re-Type Password">
				@endif
				<div id="remember" class="checkbox">
					<label>
					</label>
				</div>
				<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
	  	              </form><!-- /form -->
	  	              {{-- <a href="#" class="forgot-password">
	  	                  Forgot the password?
	  	              </a> --}}
			</div><!-- /card-container -->

	</div>

    </div><!-- /container -->
@endsection
@section('js')
	<script type="text/javascript" src="{{ asset('userRegister.js') }}"></script>

	<script type="text/javascript">
	function readURL(input) {
if (input.files && input.files[0]) {
   var reader = new FileReader();

   reader.onload = function (e) {
       $('#blah')
	 .attr('src', e.target.result)
   };

   reader.readAsDataURL(input.files[0]);
}
}
	</script>
@endsection
