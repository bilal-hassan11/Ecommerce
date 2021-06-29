<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Contact;
use Redirect;


class FrontController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => '',
            'menu' => 'home'
        );

        return view('front_pages.home')->with($data);
    }

    public function login(){

        return view('front_pages.login');
    }

    public function register(){

        return view('front_pages.register');
    }

    public function create(Request $request){
        
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'address' => 'required',
            'profile_pic' => 'required',
            'phone_no' => 'required',
        ]);
        
        if($validator->fails()) {
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
        $user->is_admin = 0;
        $user->status = "normal_user";
        $user->password = Hash::make($data['password']);
        $user->phone = $data['phone_no'];

        $user->save();
       
        return back()->with('success','You have successfully Registered!'); 
        
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

    public function about()
    {
        $data = array(
            'title' => 'About Us',
            'menu' => 'about'
        );

        return view('front.about')->with($data);
    }

    public function track(Request $request)
    {
        $order = $order_details = [];
        if($request->order_id){
            $order = \App\Order::with('cargo_service')->where('order_no', $request->order_id)->first();
            if($order){
                $_order_details = \App\OrderStatusChange::where('order_id', $order->id)->get();

                foreach ($_order_details as $value) {
                    $order_details[$value->status] = $value;
                }
            }
        }
        $data = array(
            'title' => 'Track Order',
            'menu' => 'track',
            'order' => $order,
            'order_details' => $order_details
        );

        return view('front.track')->with($data);
    }

    public function contact()
    {
        $data = array(
            'title' => 'Contact Us',
            'menu' => 'contact'
        );

        return view('front.contact')->with($data);
    }

    public function save_contact(Request $request)
    {
        $validator = Validator::make($request->toArray(), array(
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'phone' => ['required', 'string'],
            'subject' => ['required', 'string'],
            'msg' => ['required', 'string', 'min:10'],
        ));

        if (!$validator->passes()) {
            return response()->json([
                'errors' => $validator->errors(),
            ]);
        }

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->msg = $request->msg;

        $contact->save();
        return response()->json([
            'success' => "Thanks For contacting us we will contact you shortly!",
            'reload' => true
        ]);
    }

    public function services()
    {
        $data = array(
            'title' => 'Services',
            'menu' => 'services'
        );

        return view('front.services')->with($data);
    }

    public function terms_conditions()
    {
        $data = array(
            'title' => 'Term and conditions',
            'menu' => 'terms'
        );

        return view('front.terms')->with($data);
    }

    public function privacy_policy()
    {
        $data = array(
            'title' => 'Privacy Policy',
            'menu' => 'privacy'
        );

        return view('front.privacy')->with($data);
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
