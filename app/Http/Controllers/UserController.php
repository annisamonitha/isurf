<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
             if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect('dashboard');
            }else{
                return redirect('/user')->with('flash_message_error','Invalid Username or Password');
            }
        }
        return view('auth.login');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function settings(){
        return view('user.settings');
    }

    public function chkPassword(Request $request){
        $data = $request->all();
        $current_password = $data['current_pwd'];
        $check_password = User::where(['admin'=>'1'])->first();
        if(Hash::check($current_password,$check_password->password)){
            echo "true"; die;
        }else {
            echo "false"; die;
        }
    }

    public function updatePassword(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $check_password = User::where(['email' => Auth::user()->email])->first();
            $current_password = $data['current_pwd'];
            if(Hash::check($current_password,$check_password->password)){
                $password = bcrypt($data['new_pwd']);
                User::where('id','1')->update(['password'=>$password]);
                return redirect('/settings')->with('flash_message_success','Password updated Successfully!');
            }else {
                return redirect('/settings')->with('flash_message_error','Incorrect Current Password!');
            }
        }
    }


    public function logout(){
        Session::flush();
        return redirect('/login')->with('flash_message_success','Logged out Successfully'); 
    }
}
