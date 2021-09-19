<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller{

    public function menu(){
        
        $data = array(
            'title' => 'Add Menu',
            'users_data' => User::get(),
        );
        //Menu data for update
        // if(isset($request['user_id'])){
        //     $data['update'] = true;
        //     $data['update_menu'] = menu::where('id',hashids_decode($request['menu_id']))->first();
        //     $data['title']  = 'Update Menu';
        // }

        return view('admin.menu.add_menu')->with($data);
    }

    public function save_menu(Request $request){
        
        if(isset($request->title) && $request->title != ""){

        
            $data = $request;
            $imageName = time().'.'.$request->menu_logo->extension();  
            $request->menu_logo->move(public_path('uploads\Menu'), $imageName);

        
            $menu = new Menu;
            
            $menu->title = $data['title'];
            $menu->image = $imageName;
            $menu->price = $data['price'];
            $menu->description = $data['description'];
            $menu->status = $data['status'];
            
            $menu->save();

            return response()->json([
                'success'   => "Menu has been added",
                'redirect'    => route('admin.menu.show'),
            ]);

        }else{
            return response()->json([
                'error'   => "You have to Provide Current Fields!",
                'reload'  => TRUE,
            ]);
        }
    }

    public function all_menu(){

        $data = array(
            'title' => 'All Menu',
            'menu' => Menu::paginate(10),
            'users_data' => User::get(),
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