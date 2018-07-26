<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ProfileController extends Controller
{
   public function getProfile( )
   {
    $User_id=auth()->user()->id;
    $user=User::find($User_id);
    return view('profile.update')->with('user',$user);


   }


public function postProfile(Request $request)
{
dd("Received");

}



}
