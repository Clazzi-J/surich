<?php
namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon , DB, Hash,Redirect, View, Validator;

use App\Model\pictureModel;
use App\Model\userModel;

class userController extends Controller{
	private $request = '';
	private $user = '';
	private $picture ='';
	public function __construct(Request $request,userModel $user,pictureModel $picture){
		$this->request = $request;
		$this->user = $user;
		$this->picture = $picture;
	}
	//GET METHODS
	public function adminDashboard(){
		$data['user'] = $this->user->find(Auth()->user()->id);
		return view('admin.adminDashboard',$data);
	}

	public function getLogin(){
		return view('admin.adminLogin');
	}

	public function getRegister(){
		$data['user'] = $this->user->where('id',Auth()->id())->first();
		return view('admin.adminRegister',$data);
	}

	public function adminLogout(){
		auth::logout();
		return Redirect::to('admin');
	}


	public function getProfile($slug){
		$data['user'] = $this->user->where('slug',$slug)->first();
		return view('admin.adminProfile',$data);
	}

	public function editProfile($id){
		if (Auth()->id() == $id) {
			$data['user'] = $this->user->where('id',$id)->first();
			return view('admin.adminEditProfile', $data);
		} else{
			return Redirect::back();
		}
	}

	public function allUsers(){
		return view('admin.allUsers');
	}

	public function getAll(){
		$user = $this->user->find(Auth()->user()->id);
		$admins = $this->user->all()->where('admin',1);
		return view('admin.allAdmin',compact('user','admins'));
	}

	//USER
	public function getUser(){
		return view('users.users');
	}

	public function userRegister(){
		return view('users.userRegister');
	}

	public function adminSalesPage(){
		return view('admin.adminsalespage');
	}

	public function search(){
		if($user = $this->user->where('email',$this->request->email)->first()){
			return Redirect::to('user/landingpage/'.$user->slug);
		}
		$error = [
			'message'=>'User not found'
		];
		return redirect::back()->withErrors($error);
	}

	//POST METHODS
	public function postLogin(){
		if (Auth::attempt(['email' => $this->request->email, 'password' => $this->request->password, 'admin' =>1])) {
			return Redirect::to('admin/dashboard');
		} else {
			$error = [
				'message'=>'Invalid email or password.'
			];
			return Redirect::to('admin')->withErrors($error)->withInput();
		}
	}

	public function postRegister(){
		$validator = Validator::make($this->request->all(), [
			'fname'=>'required|max:50|min:3|alpha',
			'lname'=>'required|max:50|min:3|alpha',
			'email'=>'required|email|unique:users,email',
			'address'=>'required|max:150|min:5',
			'facebook_link'=>'required|max:150|min:5',
			'contact'=>'required|integer',
			'password'=>'required|confirmed',
		]);
		if($validator->fails()) {
			$errors = $validator->errors();
			return redirect::back()->withErrors($errors)->withInput();
		} else {
			$password = Hash::make('password');

			$this->user->admin = 1;
			$this->user->fname = $this->request->fname;
			$this->user->lname = $this->request->lname;
			$this->user->email = $this->request->email;
			$this->user->address = $this->request->address;
			$this->user->fb_link = $this->request->facebook_link;
			$this->user->slug = $this->user->fname.'-'.$this->user->lname . time();
			$this->user->contact = '+63'.$this->request->contact;
			$this->user->password = $password;
			$this->user->remember_token = $this->request->_token;
			$this->user->save();

			$this->picture->user_id = $this->user->id;
			$this->picture->remember_token = $this->request->_token;
			$this->picture->file_name = 'default.png';
			$this->picture->save();
			// $this->picture->user_id = $this->user->id;
			// $this->picture->file_name = $this->request->file_name;
			return Redirect::to('admin');
		}
	}

	public function avatarEdit($id){
		$validator = Validator::make($this->request->all(), [
			'avatar' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
		]);
		if ($validator->fails()) {
			$error = [
				'message'=>'Invalid file type.'
			];
			return redirect::back()->withErrors($error);
		}else{
			$this->picture = pictureModel::where('id',$id)->first();

			$name = time() . $this->request->avatar->getClientOriginalName();

			$this->request->avatar->move(public_path('img'),$name);

			$this->picture->user_id = Auth::user()->id;
			$this->picture->file_name = $name;
			$this->picture->save();

			return Redirect::back();
		}
	}

	public function postEditProfile($id){
		$now = Carbon::now('Asia/Tokyo');

		if ($this->request->newpassword == '') {

			$this->user = Auth::user();
			$this->user->fname = $this->request->fname;
			$this->user->lname = $this->request->lname;
			$this->user->slug = $this->user->fname.'-'.$this->user->lname . time();
			$this->user->fb_link = $this->request->facebook_link;
			$this->user->email = $this->request->email;
			$this->user->address =$this->request->address;
			$this->user->contact = $this->request->contact;
			$this->user->updated_at = $now;

			if (Hash::check($this->request->password,$this->user->password)) {
				$this->user->save();
				return Redirect::back();
			}else {
				$error = [
					'error'=>'Invalid email or password.'
				];
				return Redirect::back()->withErrors($error);
			}
		} else {
			$validator = Validator::make($this->request->all(), [
				'newpassword'=>'required|confirmed',
			]);

			if($validator->fails()) {
				$error = [
					'newpassword'=>'Invalid email or password.'
				];
				return Redirect::back()->withErrors($error);
			} else{
				$this->user = Auth::user();
				$this->user->fname = $this->request->fname;
				$this->user->lname = $this->request->lname;
				$this->user->slug = $this->user->fname.'-'.$this->user->lname . time();
				$this->user->fb_link = $this->request->facebook_link;
				$this->user->email = $this->request->email;
				$this->user->address =$this->request->address;
				$this->user->contact = $this->request->contact;
				$this->user->updated_at = $now;
				if (Hash::check($this->request->password,$this->user->password)) {
					$password = Hash::make($this->request->newpassword);
					$this->user->password = $password;
					$this->user->save();
					return Redirect::back();
				}else{
					$error = [
						'error'=>'Invalid email or password.'
					];
					  return Redirect::back()->withErrors($error);
				};
			}
		}
	}





	public function postUserRegister(){
		$validator = Validator::make($this->request->all(),[
			'fname'=>'required|max:50|min:3|alpha',
			'lname'=>'required|max:50|min:3|alpha',
			'email'=>'required|email|unique:users,email',
			'address'=>'required|max:150|min:5',
			'fb_link'=>'required|max:150|min:5',
			'contact'=>'required|integer',
			'password'=>'required|confirmed',
			'avatar' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
		]);
		if ($validator->fails()) {
			return redirect::back()->withInput()->withErrors($validator);
		} else {
			$password = Hash::make($this->request->password);

			$this->user->fname = $this->request->fname;
			$this->user->lname = $this->request->lname;
			$this->user->email = $this->request->email;
			$this->user->address = $this->request->address;
			$this->user->fb_link = $this->request->fb_link;
			$this->user->slug = $this->user->fname.'-'.$this->user->lname.time();
			$this->user->contact = '+63'.$this->request->contact;
			$this->user->password = $password;
			$this->user->remember_token = $this->request->_token;
			$this->user->save();

			$file = $this->request->file('avatar');
			$name = preg_replace('/\s+/', '',time() . $file->getClientOriginalName());
			$file->move('img/avatar',$name);

			$this->picture->user_id = $this->user->id;
			$this->picture->remember_token = $this->request->_token;
			$this->picture->file_name = $name;
			$this->picture->save();

			return redirect::to('user');
		}
	}








}
