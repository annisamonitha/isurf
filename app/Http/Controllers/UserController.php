<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use Hash;

class UserController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function settings(){
        return view('user.settings');
    }

    public function changePassword(Request $request){
        
        if(!(Hash::check($request->get('current_password'), Auth::user()->password))){
            return back()->with('flash_message_error','Your current password does not match with what you provided');
        }
        if(strcmp($request->get('current_password'), $request->get('new_password'))==0) {
          return back()->with('flash_message_error','Your new password cannot be same with the current password');  
        }

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed'
        ]);

        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'))->save();

        return back()->with('flash_message_success','Password Changed Successfully'); 
    }

    public function logout(){
        Session::flush();
        return redirect('/login')->with('flash_message_success','Logged out Successfully'); 
    }
}
