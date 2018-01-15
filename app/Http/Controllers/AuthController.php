<?php

namespace App\Http\Controllers;


use Socialite;

class AuthController extends Controller
{
	/**
	 * Redirect the user to the GitHub authentication page.
	 *
	 * @return Response
	 */
	public function redirectToProvider($provider)
	{
		return Socialite::driver($provider)->redirect();
	}

	/**
	 * Obtain the user information from GitHub.
	 *
	 * @return Response
	 */
	public function handleProviderCallback($provider)
	{
		$user = Socialite::driver($provider)->user();

		$lineid = $user->getId();
		return view('qr')->with('id',$lineid);
		// $user->token;
	}
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

	// public function redirectToProviderTW()
	// {
	// 	return Socialite::with('twitter')->redirect();
	// }

	// /**
	//  * Obtain the user information from GitHub.
	//  *
	//  * @return Response
	//  */
	// public function handleProviderCallbackTW()
	// {
	// 	$user = Socialite::driver('twitter')->user();

	// 	$lineid = $user->getId();
	// 	return view('qr')->with('id',$lineid);
	// 	// $user->token;
	// }
}
