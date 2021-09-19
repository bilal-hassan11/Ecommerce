<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Validator,Auth,DB;

class RolePermissionController extends Controller
{
    public function __construct(){
        
        $this->middleware('auth:admin');
    }

    public function index(){

        $data = [
            "title" => "Add Role",
            'Roles'=>Role::paginate(10),
        ];

        return view("admin.RolePermission.add_role")->with($data);
    }

    public function create_role(Request $request){
        
        if(Role::where('name',$request->name) == ""){
            
            session()->flash("error", "You have to Provide Name");
            return back();
        }
        
        if(Auth::guard('admin')->check()){

            if(Role::where('name',$request->name)->where('guard_name',$request->role)->exists()){
                
                session()->flash("error", "Role Already Created For ".$request->role);
                return back();
            }        
            
            if($request->role == "Company" ){
                $role = Role::create(['guard_name' => 'Company', 'name' => $request->name]);
                session()->flash("success", "Role Assign To Company Successfully!");
            }else{
                $role = Role::create(['guard_name' => 'web', 'name' => $request->name]);
                session()->flash("success", "Role Assign To User and Vendor Successfully!");
            }
            
            return back();
    
        }
    }

    public function permission(Request $request){

        $data = [
            "title" => "Add Permission",
            'permissions'=>Permission::paginate(10),
        ];

        return view("admin.RolePermission.add_permission")->with($data);
    }

    public function create_permission(Request $request){
        //dd($request->all());
        if(Permission::where('name',$request->name) == ""){
            
            session()->flash("error", "You have to Provide Name");
            return back();
        }

        if(Permission::where('name',$request->name)->where('guard_name',$request->guard)->exists()){
            
            session()->flash("error", "Permission Already Created For ".$request->guard);
            return back();
        }
        
        if($request->guard == "Company"  ){
            
            $permission = Permission::create(['guard_name' => 'Company', 'name' => $request->name]);
            session()->flash("success", "Permission Assign To Company Successfully!");

        }else{
           
            $permission = Permission::create(['guard_name' => 'web', 'name' => $request->name]);
            session()->flash("success", "Permission Assign To User and Vendor Successfully!");
        }
        
        return back();
    }

    public function role_permission(){
        
        $data = [
            "title" => "Add Permission",
            'Permissions'=>Permission::get(),
            'Roles'=>Role::get(),
        ];
       
        return view("admin.RolePermission.assign_role_permission")->with($data);
    }
    
    public function assign_permission_to_role(Request $request){
        //dd($request->all());
        
        $permission = $request->permission;

        $role = Role::findById($request->role ,$request->guard);
        
        $role->syncPermissions($permission);
        
        session()->flash("success", "Permission Assign To $role->name Successfully!");
        
        return back();
        
        // if ($request->has('permission')) {
           
        //     $role->permissions()->sync($request->permissions);
        //     dd("done!");    
        // }
        // //$r->givePermissionTo($data['name']);
        // // foreach($p As $Per ){
            
        // //     $permi["name"] = strval($Per);
        // //     $permission = array('name' => $permi);
        // //     $r->givePermissionTo($permi["name"]);
            
        // //     // if($Per = Role::all()->pluck('name')){
        // //     //     dd("exist!");
        // //     //     $r->givePermissionTo($Per);
        // //     // }else{
        // //     //     dd("not exist");
        // //     //     $permission = Permission::create(['name' => $Per]);
        // //     //     $r->givePermissionTo($Per);
        // //     // }
        // // } 
        // // dd($p);
        // $permission = Role::create(['name' => $r]);
        // dd("done!");
        // // // if (role already created/exist){
        // // //     then
        // // // }else{
        // //     $Role['name'] = Role::create(['name' => 'edit bank']);   
        // // }
        
        // // $data = array[
        // //     'name'=>$request->role,
        // // ];
        // // $role['name'] = $request->role;
        // // $permission['name'] = Permission::create(['name' => 'edit bank']);
        // // $role->givePermissionTo($permission);
        // // $permission->assignRole($data['name']);
        // $user = Auth::user();
        // dd("done");
        // dd($user->getPermissionNames());
        
        // // $p = $request->permission;
        // // //dd($p);
        // // $permission = implode('',$request->permission);
        // // $role = $request->role;
        // // //dd($role);
        
        // $role = Role::create(['name' => 'Mechanic']);
        // $permission = Permission::create(['name' => 'add articles']);
        // $role->givePermissionTo($permission);
        // dd("done!");
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|min:5|unique:permissions,name',
        // ]);
            
        // if($validator->fails()) {
        //     session()->flash("error", "Permission Already Created!");
        //     return back();
        // }
        
       
        // $permission = Permission::create(['guard_name' => 'Admin', 'name' => $request->name]);

        // session()->flash("success", "Permission Added Successfully!");
        
        // return back();
    }
    

    public function guard_roles($guard_name){
        
        $html = '';
            
            $roles = DB::table("roles")
                        ->where("guard_name",'=',$guard_name)->get();
            if(count($roles)>0){
                foreach($roles AS $guard){
                    $html .= '<option value="'.$guard->id.'">'.$guard->name.'</option>';
                }
                return $html;
            }else{
                $html .= "<option value=''>No Roles Created For That Guard!</option>";
                return $html;
            }
    }
    
    public function guard_permissions($guard){
        
        $html = '';
            
            $permission = DB::table("permissions")
                        ->where("guard_name",'=',$guard)->get();
            if(count($permission)>0){
                foreach($permission AS $guard){
                    $html .= '<option value="'.$guard->id.'">'.$guard->name.'</option>';
                }
                return $html;
            }else{
                $html .= "<option value=''>No Permission Created For That Guard!</option>";
                return $html;
            }
    }  

    public function get_permission($role){
        
        $html = "";
        $role = Role::findById($role ,'web');
            $data = $role->permissions->pluck('name');
            //$data = $role->getAllPermissions();
            //dd($data );
            if(count($data)>0){
                foreach($data AS $guard){
                    $html .=    '<div class="row">
                                    <label style="margin-left:20px;" >'.$guard.'</label>
                                        <div class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                            <label class="d-block" >
                                                <input class="radio_animated" style="margin-left:20px;" type="radio" value="allow" checked="">
                                                Allow
                                            </label>
                                        </div>
                                </div>';
                }
                return $html;
            }else{
                $html .= '<label>No Permission Assign To Role</label>';
                return $html;
            }

            
           
        
    }


}
//auth()->user()->hasRole(Role::findByName($role, $guard))