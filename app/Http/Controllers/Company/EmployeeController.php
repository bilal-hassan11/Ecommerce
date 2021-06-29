<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator, Auth;
use Illuminate\Support\facades\Crypt;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Redirect;

class EmployeeController extends Controller
{
    public function index(Request $request){
        
        $data = array(
            'title' => 'Add employee',
            'employee'=> User::where('status','=',Auth::user()->id),
        );
        //employee data for update
        if(isset($request['user_id'])){
            $data['update'] = true;
            $data['update_employee'] = User::where('id',hashids_decode($request['employee_id']))->first();
            $data['title']  = 'Update employee';
        }

        return view('company.employee.add_employee')->with($data);
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
        ]);
        
        
        if($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        
        $imageName = time().'.'.$request->profile_pic->extension();  
        $request->profile_pic->move(public_path('uploads\profile_pic'), $imageName);
  
        $data = $request->all();
        $employee = new User;
        
        $employee->name = $data['full_name'];
        $employee->email = $data['email'];
        $employee->address = $data['address'];
        $employee->profile_pic = $imageName;
        $employee->is_admin = 0;
        $employee->password = Hash::make($data['password']);
        $employee->nic = $data['nic'];
        $employee->created_by = Auth::user()->id;
        $employee->phone = $data['phone'];
        $employee->save();
        
        return back()->with('success','Employee has Been successfully Added!'); 

    }

    public function all_employee(){

        $data = array(
            'title' => 'All employee',
            'employee' => User::where('status','=','employee')->paginate(10),
        );
        return view('company.employee.all_employee')->with($data);
    }

    public function search(Request $request){
            // echo '<pre>';
            // print_r($request->all());
            // die();
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

    function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }

}
