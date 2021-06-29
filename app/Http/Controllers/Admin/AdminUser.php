<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\facades\Crypt;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\{Country,State};

use DB, Auth, Redirect, Validator, Response;

class AdminUser extends Controller
{   
 
    public function index(Request $request){
        
        $data['countryname'] = DB::table('countries')
            ->get();
        $data['statename'] = DB::table('states')
            ->get();
        
        //user data for update
        if(isset($request['user_id'])){
            $data['update'] = true;
            $data['update_user'] = User::where('id',hashids_decode($request['user_id']))->first();
            $data['title']  = 'Update User';
        }

        return view('admin.users.add_user')->with($data);
    }

    public function getState(Request $request)
    {
        dd($request-all());
        $data['states'] = State::where("country_id",$request->country_id)->get(["name","id"]);
        
        return response()->json($data);
    }
    
    public function getCity(Request $request)
    {
        $data['cities'] = City::where("state_id",$request->state_id)->get(["name","id"]);
        dd($data['cities']);
        return response()->json($data);
    }

    public function save(Request $request){
       
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'c_password' => 'required|min:6|same:password',
            'address' => 'required',
            'phone' => 'required',
            'nic' => 'required',
            'skills'=> 'required',
            
        ]);
        
        
        if($validator->fails()) {
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
        $user->created_by = 'admin';
        $user->phone = $data['phone'];

        $user->save();
        //dd($data);
        return back()->with('success','You have successfully Added.'); 

    }

    public function all_users(){

        $data = array(
            'title' => 'All Users',
            'users' => User::where('status','!=','vendor')->orderBy('id', 'desc')->take(10)->get(),
        );
        return view('admin.users.all_users')->with($data);
    }

    public function search(Request $request){
           
            $key = $request['search'];
            $data = array(
                'title' => 'All Users',
                'users' => User::where('first_name','like','%'.$key.'%')
                        ->orWhere('last_name','like','%'.$key.'%')
                        ->orWhere('username','like','%'.$key.'%')
                        ->orWhere('email','like','%'.$key.'%')
                        ->orWhere('nic','like','%'.$key.'%')
                        ->orWhere('contact_number','like','%'.$key.'%')
                        ->paginate(10),

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

    function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }


}
