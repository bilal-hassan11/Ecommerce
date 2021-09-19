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

        return view('front_pages.about_us')->with($data);
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

        return view('front_pages.contact')->with($data);
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

    public function right_sidebar()
    {
        $data = array(
            'title' => '',
            'menu' => 'home'
        );

        return view('front_pages.right_sidebar')->with($data);
    }

    public function left_sidebar()
    {
        $data = array(
            'title' => '',
            'menu' => 'home'
        );

        return view('front_pages.left_sidebar')->with($data);
    }

    public function clothes()
    {
        $data = array(
            'title' => '',
            'menu' => 'home'
        );

        return view('front_pages.collection')->with($data);
    }

    public function watches()
    {
        $data = array(
            'title' => '',
            'menu' => 'home'
        );

        return view('front_pages.watch')->with($data);
    }

    public function electronics()
    {
        $data = array(
            'title' => '',
            'menu' => 'home'
        );

        return view('front_pages.electronic')->with($data);
    }

    public function nursery()
    {
        $data = array(
            'title' => '',
            'menu' => 'nursery'
        );

        return view('front_pages.nursery')->with($data);
    }

    public function bags()
    {
        $data = array(
            'title' => '',
            'menu' => 'bags'
        );

        return view('front_pages.bags')->with($data);
    }

    public function shoes()
    {
        $data = array(
            'title' => '',
            'menu' => 'bags'
        );

        return view('front_pages.shoes')->with($data);
    }

    public function flower()
    {
        $data = array(
            'title' => '',
            'menu' => 'Flower'
        );

        return view('front_pages.flower')->with($data);
    }

    public function vegetable()
    {
        $data = array(
            'title' => '',
            'menu' => 'Vegetable'
        );

        return view('front_pages.vegetables')->with($data);
    }

    public function beauty()
    {
        $data = array(
            'title' => '',
            'menu' => 'Beauty'
        );

        return view('front_pages.beauty')->with($data);
    }

    public function light()
    {
        $data = array(
            'title' => '',
            'menu' => 'Light'
        );

        return view('front_pages.light')->with($data);
    }

    public function furniture()
    {
        $data = array(
            'title' => '',
            'menu' => 'Furniture'
        );

        return view('front_pages.furniture')->with($data);
    }

    public function goggle()
    {
        $data = array(
            'title' => '',
            'menu' => 'Goggle'
        );

        return view('front_pages.goggles')->with($data);
    }

    public function book()
    {
        $data = array(
            'title' => '',
            'menu' => 'Books'
        );

        return view('front_pages.lookbook')->with($data);
    }

    public function instagram()
    {
        $data = array(
            'title' => '',
            'menu' => 'Instagram'
        );

        return view('front_pages.instagram-shop')->with($data);
    }

    public function video()
    {
        $data = array(
            'title' => '',
            'menu' => 'Instagram'
        );

        return view('front_pages.video')->with($data);
    }

    public function parallax()
    {
        $data = array(
            'title' => '',
            'menu' => ''
        );

        return view('front_pages.parallax')->with($data);
    }

    public function fullpage()
    {
        $data = array(
            'title' => '',
            'menu' => 'Fullpage'
        );

        return view('front_pages.full-page')->with($data);
    }

    public function search()
    {
        $data = array(
            'title' => '',
            'menu' => ''
        );

        return view('front_pages.parallax')->with($data);
    }

    public function wishlist()
    {
        $data = array(
            'title' => '',
            'menu' => ''
        );

        return view('front_pages.wishlist')->with($data);
    }

    public function review()
    {
        $data = array(
            'title' => '',
            'menu' => ''
        );

        return view('front_pages.parallax')->with($data);
    }

    public function typography()
    {
        $data = array(
            'title' => '',
            'menu' => ''
        );

        return view('front_pages.parallax')->with($data);
    }
    
    public function comingsoon(){

        return view('front_pages.coming-soon');
    }

    public function ordersuccess(){

        return view('front_pages.order-success');
    }
    public function logout(){
        Auth::guard('web')->logout();
        return redirect('/');
    }
}
