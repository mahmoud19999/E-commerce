<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use App\Models\Message;


class MessageController extends Controller
{
    function newsletter(Request $request)
	{
		$data=$request->validate([
			
		'email'=>'required|email'	
			
		]);
		
		Newsletter::create($data);
		return back();
	}
	
	function contact(Request $request)
	{
		$data=$request->validate([
			
        'name'=>'required|string|max:191',
		'email'=>'required|email|max:191',
		'subject'=>'nullable|string|max:191',
		'message'=>'required|string|max:10000',			
		]);
		
		Message::create($data);
		return back();
	}
}
