<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;



class AuthController extends Controller
{
    function login()
	{
		return view('login');
	}
	
	function doLogin(Request $request)
	{
		$data=$request->validate([
			
		'email'=>'required|email|max:200',
		'password'=>'required|string'	
			
		]);
		
if(!auth()->attempt(['email'=>$data['email'],'password'=>$data['password']]))
{
	return back();
}
	
else
{
  return redirect(route('homepage'));
	  
}
	}
	
	
function register()
{
	return view('register');
}
	
function handleregister(Request $request)
{
	$data=$request->validate([
		'email'=>'required|email|max:200',
		'password'=>'required|string'	
			
		]);
	
	$user=new Admin();
	$user->email=$request->email;
	$user->password=\Hash::make($request->password);
    $user->save();
	
	return redirect(route('homepage'));

	
}
	
	
function logout()
{
	auth()->logout();
	return redirect(route('login'));
}
	
	
	
	
	
}
