<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\{Country,State};

use DB, Auth, Redirect, Validator, Response;

class AdminUser extends Controller
{   
 
    public function index(Request $request){
        
        $data['permissions'] = DB::table('permissions')->get();
        $data['Roles'] = DB::table('roles')->where('guard_name','=','web')->get();
        $data['users_data'] = User::get();
        //user data for update
        if(isset($request['user_id'])){
            $data['update'] = true;
            $data['update_user'] = User::where('id',hashids_decode($request['user_id']))->first();
            $data['title']  = 'Update User';
        }

        return view('admin.users.add_user')->with($data);
    }

    public function save(Request $request){
        
        if(Auth::guard('Company')->check()){
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
           
            $skill = implode(",",$request->skills);
            
            $imageName = time().'.'.$request->profile_pic->extension();  
            $request->profile_pic->move(public_path('uploads\profile_pic'), $imageName);
    
            $data = $request->all();
            $user = new User;
            
            $user->name = $data['full_name'];
            $user->email = $data['email'];
            $user->address = $data['address'];
            $user->profile_pic = $imageName;
            $user->skills = $skill;
            $user->experience = $data['experience'];
            $user->password = Hash::make($data['password']);
            $user->nic = $data['nic'];
            $user->status = 'employee';
            $user->user_role = $data['role'];
            $user->created_by = Auth::guard('Company')->user()->id ;
            $user->phone = $data['phone'];
            $role = Role::findOrFail($data['role']);
            $user->save();

            $user->assignRole($role);
            return back()->with('success','You have successfully Added.');  
            dd(Auth::guard('Company')->user()->name);
            
        }elseif(Auth::guard('admin')->check()){
            
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
           
            $skill = implode(",",$request->skills);
            
            $imageName = time().'.'.$request->profile_pic->extension();  
            $request->profile_pic->move(public_path('uploads\profile_pic'), $imageName);
    
            $data = $request->all();
            $user = new User;
            
            $user->name = $data['full_name'];
            $user->email = $data['email'];
            $user->address = $data['address'];
            $user->profile_pic = $imageName;
            $user->skills = $skill;
            $user->experience = $data['experience'];
            $user->password = Hash::make($data['password']);
            $user->nic = $data['nic'];
            $user->status = 'user';
            $user->user_role = $data['role'];
            $user->created_by = 'admin';
            $user->phone = $data['phone'];
            $role = Role::findOrFail($data['role']);
            $user->save();

            $user->assignRole($role);
            return back()->with('success','You have successfully Added.');                                          
        }
      
    //     if($validator->fails()) {
    //         return Redirect::back()->withErrors($validator);
    //     }
    //     $skill = implode(",",$request->skills);
        
    //     $imageName = time().'.'.$request->profile_pic->extension();  
    //     $request->profile_pic->move(public_path('uploads\profile_pic'), $imageName);
  
    //     $data = $request->all();
    //     $user = new User;
        
    //     $user->name = $data['full_name'];
    //     $user->email = $data['email'];
    //     $user->address = $data['address'];
    //     $user->profile_pic = $imageName;
    //     $user->skills = $skill;
    //     $user->experience = $data['experience'];
    //     $user->password = Hash::make($data['password']);
    //     $user->nic = $data['nic'];
    //     $user->status = 'user';
    //     $user->created_by = 'admin';
    //     $user->phone = $data['phone'];

    //     $user->save();
    //     //dd($data);
    //     return back()->with('success','You have successfully Added.'); 

    }

    public function all_users(){

        $data = array(
            'title' => 'All Users',
            'users_data' => User::get(),
            'users' => User::where('status','!=','vendor')->orderBy('id', 'desc')->take(10)->get(),
        );
        return view('admin.users.all_users')->with($data);
    }


    function check(Request $request){
        //Validate inputs
        $request->validate([
           'email'=>'required|email|exists:users,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists on users table'
        ]);

        $creds = $request->only('email','password');
        if( Auth::guard('web')->attempt($creds) ){
            
            return redirect()->route('user.home');
        }else{
            return redirect()->route('user.login')->with('fail','Incorrect credentials');
        }
    }

    public function profile(Request $request){

        $data = array(
            'title' => 'All Users',
            'users' =>  DB::table('admins')->select("*")->where('id','=',Auth::user()->id)->get()
        );     
        return view('admin.users.profile')->with($data);
    }

    public function update_profile(Request $request){

        $data = array(
            'title' => 'All Users',
            'users' =>  DB::table('admins')->select("*")->where('id','=',Auth::user()->id)->get()
        );

        return view('admin.users.profile')->with($data);
    }
    

    function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }


}
