<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth, DB ;
use App\Models\Message;
class ContactController extends Controller
{
    public function contact(Request $request){
       
        
        $data = array(
            'title' => 'All Contacts',
            'contacts' => DB::table('contact')
                            ->join('companies', 'contact.sender_id', '=', 'companies.id')
                            ->select('contact.*', 'companies.title','companies.logo')
                            ->where('contact.type','=','company')
                            ->where('contact.message_status','=','unseen')
                            ->where('sender_id','=',Auth::user()->id)
                            ->get()
            );  
        //dd($data);
        return view('admin.admin_contact.all_admin_contact')->with($data);
    }

    public function edit_Contact(Request $request){
        dd($request->all());
        $message = new Message;
        
        $message->sender_id = Auth::user()->id;
        $message->message = $request->message;
        $message->type =  $request->type;   
        $message->status = 'delivered';
        $message->message_status = "seen";
        
        $message->save();
        session()->flash("success", "Message Delievered Successfully!");
        
        return back(); 
    }
}
