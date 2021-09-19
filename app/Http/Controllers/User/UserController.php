<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){

        return view('user.login');
    }

    public function register(){

        return view('user.register');
    }

    public function home(){

        return view('user.home');
    }
    
    function create(Request $request){
          //Validate Inputs
          $request->validate([
              'name'=>'required',
              'email'=>'required|email|unique:users,email',
              'password'=>'required|min:5|max:30',
              'cpassword'=>'required|min:5|max:30|same:password'
          ]);

          $user = new User();
          $user->name = $request->name;
          $user->email = $request->email;
          $user->password = \Hash::make($request->password);
          $save = $user->save();

          if( $save ){
              return redirect()->back()->with('success','You are now registered successfully');
          }else{
              return redirect()->back()->with('fail','Something went wrong, failed to register');
          }
    }

    function check(Request $request){
        //Validate inputs
        $request->validate([
           'email'=>'required|email|exists:users,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists !'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('web')->attempt($creds) ){
            
            User::where('email','=',$request->email)->update(array('activation_time' => date("Y-m-d H:i:s"),'activation_status' => "online"));
            
            return redirect()->route('user.home');
        }else{
            return redirect()->route('user.login')->with('fail','Incorrect credentials');
        }
    }

    function logout(Request $request){
       
        User::where('id','=',$request->id)->update(array('activation_time' => date("Y-m-d H:i:s"),'activation_status' => "offline"));
        
        Auth::guard('web')->logout();
            
        return redirect('/');
    }
}
