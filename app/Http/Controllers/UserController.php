<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;
use Validator;
use Auth;
use Session;

class UserController extends Controller
{
    //signup
public function getSignup(){

return view('user.signup');
}

public function postSignup(Request $request){

	$this->validate($request,  [

   'email'=>'email|required|unique:users',

   'password'=>'required'
]);

	$user=new User([


'email'=>$request->input('email'),
'password'=>bcrypt($request->input('password'))





	]);

	$user->save();
	Auth::login($user);
 Session::flash('success',' Successful Signup.');
 return redirect()->route('user.profile');
}


//signin
public function getLogin(){

return view('user.login');

}

public function postLogin(Request $request){

	$this->validate($request,  [

   'email'=>'email|required',

   'password'=>'required'
]);


if (Auth:: attempt(['email'=>$request->input('email'), 'password'=>$request->input('password'), ])) {
	
 Session::flash('success','You are login succesfully ');
	return redirect()->route('user.profile');
}

return redirect()->back();

}

//profile
public function getProfile() {
//get order
	$orders=Auth::user()->orders;
	$orders->transform(function($order,$key){
    $order->cart=unserialize($order->cart);

    return $order;
    
	});

	return view('user.profile',['orders'=>$orders]);

}

//logout

public function getLogout(){

    Auth::logout();
Session::flash('success','You are logout');
return redirect()->route('login');


}



}


