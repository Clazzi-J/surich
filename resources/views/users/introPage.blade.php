@extends('layout.userMaster')

@section('title',$user->slug.'Sales Page')

@section('css')
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Play"/>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	<link href="{{asset('css/general.css')}}" rel="stylesheet">
	<link href="{{asset('css/custom.css')}}" rel="stylesheet">
	<link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet">
	<link href="{{asset('css/owl.theme.css')}}" rel="stylesheet">
	<link href="{{asset('css/style.css')}}" rel="stylesheet">
	<link href="{{asset('css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet	">
	<script src="{{asset('js/modernizr-2.8.3.min.js')}}"></script>
	<link href="{{asset('css/introPage.css')}}" rel="stylesheet">

	<style media="screen">
	*{-moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;}
	::-webkit-scrollbar-thumb
	{
		border-radius: 10px;
		-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
		background-color: #D62929;
	}
	.navbar-default{
		min-height: 0px;
	}
	.button-message{
	color:#3DFAFF;
	}
	</style>
@endsection

@section('body')
	<body id="home">
	         <nav class="navbar-default" role="navigation">
		         <div class="container">
			         <div class="navbar-header">
				         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					         <span class="sr-only">Toggle navigation</span>
					         <span class="icon-bar"></span>
					         <span class="icon-bar"></span>
					         <span class="icon-bar"></span>
				         </button>
				         <a class="navbar-brand" href="#home" style="font-size:1.09em !important;">Surich Team HATAW</a>
			         </div>
			         <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				         <ul class="nav navbar-nav">
					         <li class="menuItem"><a href="#about">About</a></li>
					         <li class="menuItem"><a href="#beaware">Be Aware</a></li>
					         <li class="menuItem"><a href="#credits">Credits</a></li>
				         </ul>
			         </div>

		         </div>
	         </nav>

	         <!-- What is -->
		<div id="about" class="content-section-b" style="border-top:0;">

			<div class="container">
				<div class="col-md-12 text-center uses">
					<h2 style="font-size:3em !important;">Surich 5in1 Original Scalar Stickers</h2>
					<h2 style="font-size:3em !important;">Uses &amp; Benefits</h2>
				</div>
				<div class="row">
					<div class="col-sm-4 wow fadeInDown text-center">
						<img class="rotate" src="{{asset('img/sp/elec2.png')}}">
						<h3>Electric/Energy Saver</h3>
						<p class="lead">Nakakatulong ito upang maka <span style="font-weight:bold;color:green">save</span> ka lagi ng <span style="font-weight:bold;color:green">30% to 50%</span> to your monthly electric bill at napapatagal nito ang lifespan ng iyong battery.</p>
					</div><!-- /.col-lg-4 -->
					<div class="col-sm-4 wow fadeInDown text-center">
						<img  class="rotate" src="{{asset('img/sp/gas.png')}}">
						<h3>Fuel/Gas Saver</h3>
						<p class="lead">Nakakatulong ito upang maka <span style="font-weight:bold;color:green">save</span> ka lagi sa konsumo ng iyong Fuel or Gas.</p>
					</div><!-- /.col-lg-4 -->
					<div class="col-sm-4 wow fadeInDown text-center">
						<img  class="rotate" src="{{asset('img/sp/wifi.png')}}">
						<h3>Internet and pocket wifi Speed Booster</h3>
						<p class="lead">Nilalabas nito ang natatagong <span style="font-weight:bold;color:green">potential</span> ng iyong internet modem and pocket wifi.</p>
					</div><!-- /.col-lg-4 -->
				</div><!-- /.row -->
				<div class="row tworow">
					<div class="col-sm-4 col-sm-offset-2  wow fadeInDown text-center">
						<img class="rotate" src="{{asset('img/sp/body.png')}}">
						<h3>Good for the human body</h3>
						<p class="lead">Maganda ito sa ating katawan dahil ito ay may <span style="font-weight:bold;color:green">Scalar Energy</span> at <span style="font-weight:bold;color:green">Negative Ions</span> sa mismong sticker.</p>
					</div><!-- /.col-lg-4 -->
					<div class="col-sm-4 wow fadeInDown text-center">
						<img  class="rotate" src="{{asset('img/sp/rad.png')}}">
						<h3>Eliminates Radiation</h3>
						<p class="lead">Nakakatulong ito upang ma <span style="font-weight:bold;color:green">absorb</span> ang harmful radiation ng ating mga laptop/cellphone/tablet or other gadgets and appliances</p>
					</div><!-- /.col-lg-4 -->
				</div><!-- /.row -->
			</div>
		</div>
	         <!-- Use it -->
		<div id ="beaware" class="content-section-a" style="padding-bottom:20px;">
			<div class="container ">
				<div class="col-md-12" style="margin-bottom:1em;text-align:center">
					<h3 style="margin-bottom:10px!important;">Frequently used items that has <span style="color:red">radio-active electronic magnetic radiation</span> </h3>
				</div>
				<div class="col-md-12" style="text-align:center;margin-bottom:1.2em;">
					<img  class="rotate" src="{{asset('img/sp/rad.png')}}">
				</div>
				<div class="row" style="margin:2em auto;">
					<div class="col-sm-6 wow fadeInRightBig">
						<div class="videoWrapper">
							<iframe class="iframe" width="560" height="315" src="https://www.youtube.com/embed/eLASUbg1vbs" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
						<h3 class="section-heading">Modem/Router Radiation</h3>
						<div class="sub-title lead3">MERON BA KAYONG ACTUAL VIDEO NA NAGPAPATUNAY NA MERON RADIATION NAMAN ANG ATING MGA MODEM NA KUMAKALAT SA ATING BAHAY MISMO HANGGANG KWARTO MO  KAYA NAKAKARAMDAM TAYO NG FATIGUE, STRESS, LOW ENERGY AT HEADACHE PALAGI DAHIL SA RADIATION NA NAGMUMULA SA MODEM?</div>
						<p class="lead">
							Yes meron po, ito ang actual video ng modem mismo, kaya dapat lagyan ng Surich Original 5in1 Scalar Sticker pati modem natin sa ating bahay.
						</p>
					</div>
				</div>
			</div>
			<div class="container ">
				<div class="row" style="margin:2em auto;">
					<div class="col-sm-6 wow fadeInRightBig">
						<div class="videoWrapper">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/tzyfmx7ahCM" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
						<h3 class="section-heading">Cellphone Radiation</h3>
						<div class="sub-title lead3">MERON BA KAYONG ACTUAL VIDEO NA CELLPHONE RADIATION NAMAN ANG INA-ABSORB NA RADIATION NG SURICH ORIGINAL 5in1 SCALAR STICKER? KASI MADALAS DIN ITO HAWAK NATIN AT HALOS NAKADIKIT LAGI SA KAMAY AT SA KATAWAN NATIN ARAW-ARAW.</div>
						<p class="lead">
							Yes meron po, ito ang actual video ng cellphone mismo na inaabsorb ng Surich Original 5in1 Scalar Sticker ang radiation with actual test ng EMR (Electro Magnetic Radiation) Detector.
						</p>
					</div>
				</div>
			</div>
			<!-- /.container -->
			<div class="container ">
				<div class="row" style="margin:2em auto;">
					<div class="col-sm-6  wow fadeInRightBig">
						<div class="videoWrapper">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/-kGATmAtLeM" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
						<h3 class="section-heading">Flat Iron Radiation</h3>
						<div class="sub-title lead3">MERON BA KAYONG ACTUAL VIDEO NG KAHIT ISA SA ATING APPLIANCES NA INAABSORB MISMO NG SURICH ORIGINAL 5in1 SCALAR STICKER ANG RADIATION KAYA NAMAN MAS BUMABABA ANG KURYENTE KASI KITANG-KITA NA-AABORB ANG RADIATION? EXAMPLE SA RADIATION NG PLANTSA KASI MALAKAS SA KURYENTE YUNG PLANTSA AT YUN TALAGA ANG GAMIT NA HINAHAWAKAN NATIN NA MAY MALAKAS NA RADIATION.</div>
						<p class="lead">
							Yes meron po, ito ang actual video ng plantsa na inaabsorb ng Surich Original 5in1 Scalar Sticker ang radiation with actual test ng EMR (Electro Magnetic Radiation) Detector.
						</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row" style="margin:2em auto;">
					<div class="col-sm-6 wow fadeInRightBig">
						<div class="videoWrapper">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/WDvHwNEbGwM" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
						<h3 class="section-heading">According to Dra. Lulu Marquez</h3>
						<div class="sub-title lead3 col-md-12">
							Credits to Dra. Lulu Marquez M.D. who explained the harmful effect of radiation in human cells at DZMM Radyo Patrol 630 (Private Nights)</p>
						</div>
						<div class="sub-title lead" style="font-size:1.2em">
							Sa ayaw mo at sa hindi meron talagang invisible harmful radiation na sinisira ang ating mga healthy cells sa katawan na pwede lumala at kumalat ang mga nasirang cells at nagiging cancer cells sa katawan!
							Radiation is the main cause of cancer cells in our Body. All you have to do is to protect your self from Radiation. Use Surich Anti-Radiation Scalar Stickers now ginagawa nyang from 1,200 radiation to 0 radiation!
						</div>
					</div>
					<div class="col-md-12" style="text-align:center;margin-top:2em;">
						<img style="max-width:270px;" src="{{ asset('img/sp/ssticker.png') }}" alt="">
						<h4 style="font-weight:bold; color:red">GRAB YOUR OWN SURICH 5in1 ORIGINAL SCALAR ENERGY WITH NEGATIVE -ION STICKER THIS YEAR!!!</h4>
					</div>
				</div>
			</div>
		</div>
		<div id="credits" class="content-section-a" style="padding-top:20px!important;">
 		         <div class="container">
 			         <div class="row">
 				         <div class="col-md-6 col-md-offset-3 text-center wrap_title" >
 					         <h2>Credits</h2>
 					</div>
 					<div class="col-sm-6  block wow bounceIn">
 						<hr style="border-top: 1px solid transparent;">
 						<div class="row">
 							<div class="col-md-4" style="text-align:center">
 								<img style="max-width:150px;max-height:150px;border-radius:100%;" src="{{ asset('img/admin/jason.jpg') }}" alt="">
 							</div>
 							<div class="col-md-8 box-ct">
 								<h3>Jason Maddela</h3>
 								<p style="color:grey">Entrepreneur/Author/Speaker</p>
 								<p>Surich Team HATAW Founder <br>
 								Surich Team HATAW Trainer
 								<br>
 								Surich Business Stockist
 								</p>
 							</div>
 						</div>
 					</div>
 					<div class="col-sm-6 block wow bounceIn">
 						<hr style="border-top: 1px solid transparent;">
 						<div class="row">
 							<div class="col-md-4" style="text-align:center">
 								<img style="max-width:150px;max-height:150px;border-radius:100%;" src="{{ asset('img/admin/justin.jpg') }}" alt="">
 							</div>
 							<div class="col-md-8 box-ct">
 								<h3>Justin Tagorda</h3>
 								<p style="color:grey">Developer/Programmer <br> Designer/PhotoEditor</p>
 								<p>Surich Team HATAW Leader <br>
 								Surich Business Stockist
 								</p>
 							</div>
 						</div>
 					</div>
 			 	</div>

 				<div class="row tworow">
 					<div class="col-sm-6  block wow bounceIn">
 						<div class="row">
 							<div class="col-md-4" style="text-align:center">
 								<img style="max-width:150px;max-height:150px;border-radius:100%;" src="{{ asset('img/admin/kevin.png') }}" alt="">
 							</div>
 							<div class="col-md-8 box-ct">
 								<h3>Kevin Bitaña</h3>
 								<p style="color:grey;">Marketing Specialist</p>
 								<p>Surich Team HATAW Leader <br> Surich Business Stockist</p>
 							</div>
 						</div>
 					</div>
 					<div class="col-sm-6 block wow bounceIn">
 						<div class="row">
 							<div class="col-md-4" style="text-align:center">
 								<img style="max-width:150px;max-height:150px;border-radius:100%;" src="{{ asset('img/admin/frank.jpg') }}" alt="">
 							</div>
 							<div class="col-md-8 box-ct">
 								<h3>Frank Michael Tagorda</h3>
 								<p style="color:grey">Videographer/Photographer</p>
 								<p>Surich Team HATAW Leader <br>
 								Surich Business Stockist
 								</p>
 							</div>
 						</div>
 					</div>
 				</div>
 		         </div>
 	         </div>
	         <div  class="content-section-c" style="background-color:#003249">
		         <div class="container">
			         <div class="row">
				         <div class="col-md-10 col-md-offset-1 text-center white">
					         <h3 style="font-size:3em!important;">Are you ready to have a <span class="button-message">Read Mode</span> online orientation?</h3>
					</div>
				         <div class="col-md-6 col-md-offset-3 text-center">
					         <div class="mockup-content">
						         <div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
							     <a href="#"><button type="button " class="btn btn-primary btn-block btn-lg" style="background-color:#80CED7"><span>Press the button to get started</span></button></a>
						         </div>
					         </div>
				         </div>
			         </div>
		         </div>
	         </div>
	         <!-- Credits -->

	<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-6" style="text-align:center">
				<div class="col-md-12">
					<h5 class="footer-title">I'm an official member of Team HATAW</h5>
				</div>
				<img style="max-width:150px;border-radius:100%;" src="{{ asset('img/avatar/'.$user->image->file_name) }}" alt="">
			</div> <!-- /col-xs-7 -->
			<div class="col-md-6" style="margin-top:30px 0;padding:15px 0;text-align:center">
				<h4>Name: {{ $user->fname }} {{ $user->lname }}</h4>
				<h4>Contact: {{ $user->contact }}</h4>
				<p>E-mail: {{ $user->email }}</p>
				<p>For orders and to be part of our team, message me on Facebook now</p>
				<a href="{{ $user->fb_link }}"><img style="max-width:100px;" src="{{ asset('img/sp/fb.png') }}" alt=""></a>
			</div>

		</div>
	</div>
	<div  class="content-section-c" style="background:url('{{ asset('img/lp/landingpagebackground.png') }}');background-size:cover;">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center white">
					<h3 style="font-size:1.5em!important;">Surich Team HATAW</h3>
				 </div>
				<div class="col-md-6 col-md-offset-3 text-center">
					<p style="color:#fff">This website is property and developed by Surich Team HATAW
						<br>
						Make sure na ang bibilhan mo ng 10 sets or 15 sets pataas ay official member ng team hataw para magawan ng ka ng iyong sailing SALES PAGE WEBSITE na katulad nito.
						Para makasigurado ka na naman team HATAW ang iyong pag bibilhan magpa add ka sa groupchat na "TEAM HATAW BY SURICH".
					</p>
				</div>
			</div>
		</div>
	</div>
	</footer>
	<div class="col-md-12" style="background-color:light-grey;text-align:center">
		<p style="margin-top:10px;">Surich Team H.A.T.A.W. © 2017 - All Rights Reserved. Thank you and God-Bless!</p>
	</div>
@endsection

@section('js')
	<script src="{{asset('js/jquery.min.js') }}"></script>
	<script src="{{asset('js/bootstrap.js')}}"></script>
	<script src="{{asset('js/owl.carousel.js')}}"></script>
	<script src="{{asset('js/script.js')}}"></script>
	<!-- StikyMenu -->
	<script src="{{asset('js/stickUp.min.js')}}"></script>
	<script type="text/javascript">
	jQuery(function() {
		$(document).ready( function() {
			$('.navbar-default').stickUp();
		});
	});
	</script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="{{asset('js/jquery.corner.js')}}"></script>
	<script src="{{asset('js/wow.min.js')}}"></script>
	<script>
		new WOW().init();
	</script>
	<script src="{{asset('js/classie.js')}}"></script>
	<script src="{{asset('js/uiMorphingButton_inflow.js')}}"></script>
	<!-- Magnific Popup core JS file -->
	<script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
@endsection
