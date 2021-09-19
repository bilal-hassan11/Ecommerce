<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Validator,Redirect,Response, DB;
use App\Models\{Company,Products,user,Vendor,Message};

class AdminController extends Controller
{
    function check(Request $request){
        
        //Validate Inputs
         $request->validate([
            'email'=>'required|email|exists:admins,email',
            'password'=>'required|min:5|max:30'
         ],[
             'email.exists'=>'This email does not exists !'
         ]);

         $creds = $request->only('email','password');
         
         if( Auth::guard('admin')->attempt($creds) ){

            return redirect()->route('admin.home');
         }else{
             return redirect()->route('admin.login')->with('fail','You have to Provide Correct Email & Password!');
         }
    }

    public function dashboard(){
        
        $data = array(
            'products' => Products::get(),
            'users_data' => User::get(),
            'companies' => Company::get(),
            'user'=>  DB::table('users')->orderBy('id','desc')->get(),
            'vendors' => DB::table('users')->where('status','vendor')->get(),
            'contact' => Message::get()->count(),
        );
        
        return view('admin.home')->with($data);
    }

    public function logout(Request $request){
    
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
