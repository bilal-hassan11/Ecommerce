<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Company;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Redirect, Validator;
use Auth;

class CompanyController extends Controller
{
    public function index(){

        $data = array(
            'title' => 'All Companies',
            'CompaniesCategory' => Category::where('type','=','general')->get(),
            'companies' => Company::get(),
        );
        
        //dd($data);
        return view('admin.company.all_companies')->with($data);
    } 
    //Company after login redirect to that function
    public function dashboard(){
        
        $data = array(
            'title' => 'All Companies',
            'employee'=> User::where('created_by','=',Auth::user()->id)->where('status','=','employee')->get(),
            'companies' => Company::get(),
        );
        
        return view('company.home')->with($data);
    }

    function create(Request $request){
          
        $validator = Validator::make($request->all(), [
            'name'=>'required|min:5|max:30', 
            'logo'=>'required',
            'email'=>'required|email|unique:companies,email',
            'category'=>'required',
            'password'=>'required|min:5|max:30',
            'c_password'=>'required|min:5|max:30|same:password',
            'contact_no'=>'required|min:5|max:30',
            'address'=>'required',     
        ]);

        if($validator->fails()) {
            session()->flash("error", "You have to provide current Fields!");
            //dd($validator);
            return back();
        }
            
        $imageName = time().'.'.$request->logo->extension();       
        $request->logo->move(public_path('uploads\company_logo'), $imageName);
        //dd($imageName);

        if(isset($request->company_id) && !empty($request->company_id)){
            
            $company = new Company();
            $company->title = $request->name;
            $company->email = $request->email;
            $company->type = $request->type;
            $company->logo = $imageName;
            $company->password = \Hash::make($request->password);
            $company->contact_no = $request->contact_no;
            $company->category = $request->category;
            $company->address = $request->address;
            $company->created_by = Auth::user()->name;
            $company->save();

            session()->flash("success", "Company Added Successfully!");
            return back();

        }else{
            
            $company = new Company();
            $company->title = $request->name;
            $company->email = $request->email;
            $company->type = $request->type;
            $company->logo = $imageName;
            $company->password = \Hash::make($request->password);
            $company->contact_no = $request->contact_no;
            $company->category = $request->category;
            $company->address = $request->address;
            $company->created_by = Auth::user()->name;
            $company->save();
    
            session()->flash("success", "Company Added Successfully!");
            return back();
        }  
    }

    function check(Request $request){
        //Validate Inputs
        $request->validate([
           'email'=>'required|email|exists:companies,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists!'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('Company')->attempt($creds) ){
            return redirect()->route('Company.home');
        }else{
            return redirect()->route('Company.login')->with('fail','Incorrect Credentials');
        }
    }  

    function logout(){
        Auth::guard('Company')->logout();
        return redirect('/');
    }
}
