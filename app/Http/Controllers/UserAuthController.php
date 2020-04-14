<?php

namespace App\Http\Controllers;

use App\userAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{


    public function registration(Request $request){
       $tmp = new userAuth;
       $tmp->user = $request->user;
       $tmp->mail = $request->mail;
       $tmp->pass = $request->pass;
       $tmp->save();
       return view('signUp');
       return redirect()->route('signUp');
    }


    public function log(Request $request){
       $tmp = userAuth::all();;
       foreach ($tmp as $i){ 
          if ($i->mail == $request->mail && $i->pass == $request->pass ) {
             return view('userHomepage');
          }
       }
       return view('signUp');
    }

    public function adminLog(Request $request){  
       if ($request->mail == "admin@gmail.com" && $request->pass == "admin") {
            return view('adminHomepage');
       }
       return view('adminSignIn');
    }
}
