<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Validator,Redirect,DB;

class VendorController extends Controller
{
   
    public function vendor(){

        $data = [
            "countries" =>  DB::table("countries")->pluck("name","id"),
            'users_data' => User::get(),
        ];
        return view('admin.vendor.add_vendors')->with($data);
    }

    public function save_vendor(Request $request){
        //dd($request->all());

        $validator = Validator::make($request->all(), [
                'full_name' => 'required|min:5',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
                'c_password' => 'required|min:6|same:password',
                'address' => 'required',
                'phone' => 'required',
                'nic' => 'required',                    
            ]);

            if($validator->fails()) {
                session()->flash("error", "You have to Provide Current Fields");
                return Redirect::back()->withErrors($validator);
            }
           
            
            $imageName = time().'.'.$request->profile_pic->extension();  
            $request->profile_pic->move(public_path('uploads\profile_pic'), $imageName);
    
            $data = $request->all();
            $user = new User;
            
            $user->name = $data['full_name'];
            $user->email = $data['email'];
            $user->address = $data['address'];
            $user->profile_pic = $imageName;
            $user->password = Hash::make($data['password']);
            $user->nic = $data['nic'];
            $user->status = 'vendor';
            $user->user_role = "15";
            $user->created_by = 'admin';
            $user->phone = $data['phone'];
            $role = Role::findOrFail("15");
            $user->save();

            $user->assignRole($role);
            
            return back()->with('success','Vendor have successfully Added.');                                           
       
    }

    public function all_vendor(){

        return view('admin.vendor.all_vendor');
    }
}
