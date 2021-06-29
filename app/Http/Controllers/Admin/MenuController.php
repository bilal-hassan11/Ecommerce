<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller{

    public function menu(){
        
        $data = array(
            'title' => 'Add Menu'
        );
        //Menu data for update
        if(isset($request['user_id'])){
            $data['update'] = true;
            $data['update_menu'] = menu::where('id',hashids_decode($request['menu_id']))->first();
            $data['title']  = 'Update Menu';
        }

        return view('admin.menu.add_menu')->with($data);
    }

    public function save_menu(Request $request){
        
        $data = $request;
        
        $user = new User;
        $msg = 'User has been added';
        
        $user->first_name = $data['first_name'];
        $user->contact_number = $data['contact_number'];
        $user->acl = $data['acl'];
        $user->save();

        return response()->json([
            'success'   => $msg,
            'redirect'    => route('users.show'),
        ]);
    }

    public function all_menu(){

        $data = array(
            'title' => 'All Menu',
            'users' => Menu::paginate(10),
        );
        return view('admin.menu.all_menu')->with($data);
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
}