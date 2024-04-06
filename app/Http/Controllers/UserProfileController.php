<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserProfileController extends Controller
{
   public function index(){
      // Retrieve the currently authenticated user
    $user = Auth::user();
    
    // Retrieve favorites associated with the currently authenticated user
    $favorites = Favorite::where('user_id', $user->id)->get();

    return view('user.userprofile', ['favorites' => $favorites]);
   }
}
