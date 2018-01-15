<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

class AuthFBController extends Controller
{
    //
    public function redirectToProviderFB()
	{
		return Socialite::driver('facebook')->redirect();
	}

	
	public function handleProviderCallbackFB()
	{
		$user = Socialite::driver('facebook')->user();

		$lineid = $user->getId();
		return view('qr')->with('id',$lineid);
		// $user->token;
	}
}
