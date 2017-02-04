<?php
namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon , DB, Hash,Redirect, View, Validator;

use App\Model\pictureModel;
use App\Model\userModel;

class pageController extends Controller{
	public function getLandingPage($slug){
		$data['user'] = userModel::where('slug' , $slug)->first();
		return view('users.landingPage',$data);
	}
	public function getIntroductionPage($slug){
		$data['user'] = userModel::where('slug',$slug)->first();
		return view('users.introPage',$data);
	}
	public function getSalesPage($slug){
		$data['user'] = userModel::where('slug',$slug)->first();
		return view('users.salesPage',$data);
	}
}
