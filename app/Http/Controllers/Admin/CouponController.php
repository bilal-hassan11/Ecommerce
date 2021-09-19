<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\{Category,Products,Coupon};
use DB, Validator, Auth ;

class CouponController extends Controller
{
    public function index(){

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz#$%^&*';
       
        $data = array(

            'title' => 'Add Coupon',
            'users_data' => User::get(),
            'categories' => Category::where('name','!=',"")->where('type','=','physical')->get(),
            'products' => Products::where('type',"digital")->get(),
            'coupon_code' => substr(str_shuffle($permitted_chars), 0, 10)
            
        );
        
        return view('admin.coupon.coupon-create')->with($data);
    }

    public function save_coupon(Request $request){
       
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'discount_quantity' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'discount_type' => 'required',
            'parent_category' => 'required',
            'minimum_order' => 'required',
            'maximum_order' => 'required',
            'coupon_limit_per_quantity' => 'required',
            'coupon_limit_per_customer' => 'required',
        ]);
        
        if($validator->fails()) {
            session()->flash("error", "You have to provide current Fields!");
            return back();
        }

        $category_type = preg_split ("/\,/", $request->parent_category); 
        $product_type = $category_type[1];
        $parent_category = $category_type[0];

        
        $data = $request->all();
        $coupon = new Coupon;
        
        if(empty($data['sub_category'])){
            $sub_category = "";
        }else{
            $sub_category = $data['sub_category'];
        }

        $coupon->title = $data['title'];
        $coupon->coupon_code = $data['coupon_code'];
        $coupon->discount_quantity = $data['discount_quantity'];
        $coupon->start_date = $data['start_date'];
        $coupon->end_date = $data['end_date'];
        $coupon->shipping_status = $data['shipping'];
        $coupon->discount_type = $data['discount_type'];
        $coupon->status = $data['status'];
        $coupon->parent_category = $parent_category;
        $coupon->sub_category = $sub_category;
        $coupon->product_type = $product_type;
        $coupon->min_order = $data['minimum_order'];
        $coupon->max_order = $data['maximum_order'];
        $coupon->coupon_limit_per_quantity = $data['coupon_limit_per_quantity'];
        $coupon->coupon_limit_per_customer = $data['coupon_limit_per_customer'];
        $coupon->created_by = Auth::user()->id;
        $coupon->coupon_status = 'not_used';


        $coupon->save();
        
        session()->flash("success", "coupon Added Successfully!");
        
        redirect('admin.coupon.show');

    }

    public function all_coupon(){

        $data = array(

            'title' => 'All Coupon',
            'users_data' => User::get(),
            'coupons' => Coupon::paginate(10),
            
        );
        return view('admin.coupon.all_coupon')->with($data);
    }

    public function getcategories($category_name){
        
        $category_type = preg_split ("/\,/", $category_name); 
        $type = $category_type[1];
        $category_name = $category_type[0];
        
        $html = '';
            
            $categories = DB::table("category")
                           ->where("parent_category",$category_name)
                           ->where('type',$type)
                           ->where('name',"")->get();
            dd($categories); 
            if(count($categories)>0){
                foreach($categories AS $category){
                    $html .= '<option value="'.$category->sub_category.'">'.$category->sub_category.'</option>';
                }
                return $html;
            }else{
                $html .= "<option value=''>No categories</option>";
                return $html;
            }
               
    }

    
}
