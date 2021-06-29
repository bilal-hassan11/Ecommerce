<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth, DB ;
use App\Models\Message;
class CompanyContact extends Controller
{
    public function contact(){

        $data = array(
            'title' => 'Add Companies Category',
            'contacts' => DB::table('contact')
                            ->join('users', 'contact.sender_id', '=', 'users.id')
                            ->select('contact.*', 'users.name','users.profile_pic')
                            ->where('contact.type','=','user')
                            ->where('sender_id','=',Auth::user()->id)
                            ->get()
        );
        return view('admin.contact.all_contacts')->with($data);
    }

    public function save_contact(Request $request){
        
        $message = new Message;
        
        $message->sender_id = Auth::user()->id;
        $message->message = $request->message;
        $message->type =  $request->type;   
        $message->status = 'delivered';
        
        $message->save();
        session()->flash("success", "Message Delievered Successfully!");
        
        return back(); 
    }
}
