<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

class GoogleController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
   public function redirectToProvider()
   {
       return Socialite::driver('google')->redirect();
   }

   /**
    * Obtain the user information from GitHub.
    *
    * @return \Illuminate\Http\Response
    */
   public function handleProviderCallback()
   {
       $user = Socialite::driver('googlle')->user();
       dd($user);
       // $user->token;
   }
}
