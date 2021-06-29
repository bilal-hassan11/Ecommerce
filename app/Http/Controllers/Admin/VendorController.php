<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\{User,Permission};
use Validator,Redirect,DB;

class VendorController extends Controller
{
   
    public function vendor(){

        return view('admin.vendor.add_vendors');
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
            return Redirect::back()->withErrors($validator);
        }
        
        $imageName = time().'.'.$request->profile_pic->extension();  
        $request->profile_pic->move(public_path('uploads\profile_pic'), $imageName);
  
        $data = $request->all();
        $vendor = new User;
        $permission = new Permission;

        $vendor->name = $data['full_name'];
        $vendor->email = $data['email'];
        $vendor->address = $data['address'];
        $vendor->profile_pic = $imageName;
        $vendor->password = Hash::make($data['password']);
        $vendor->nic = $data['nic'];
        $vendor->status = 'vendor';
        $vendor->created_by = 'admin';
        $vendor->phone = $data['phone'];

        $permission->user_email =  $vendor->email;
        $permission->add_product = $data['add_product'];
        $permission->update_product = $data['product_update'];
        $permission->delete_product = $data['delete_product'];
        $permission->product_discount = $data['product_discount'];
        $permission->add_category = $data['add_category'];
        $permission->update_category = $data['update_category'];
        $permission->delete_category = $data['delete_category'];
        $permission->category_discount = $data['category_discount'];
        
        $permission->save();
        $vendor->save();
        
       
        return back()->with('success','You have successfully Added.'); 
       
    }

    public function all_vendor(){

        return view('admin.vendor.all_vendor');
    }
}
