<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Category,Products,Coupon};
use DB, Validator, Auth ;

class CouponController extends Controller
{
    public function index(){

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz#$%^&*';
       
        $data = array(

            'title' => 'Add Coupon',
            'categories' => Category::where('name','!=',"")->where('type','=','physical')->get(),
            'products' => Products::where('type',"digital")->get(),
            'coupon_code' => substr(str_shuffle($permitted_chars), 0, 10)
            
        );
        
        return view('admin.coupon.coupon-create')->with($data);
    }

    public function save_coupon(Request $request){
       
        dd($request->all());
        // $validator = Validator::make($request->all(), [
        //     'title' => 'required|min:6|min:15',
        //     'quantity' => 'required',
        //     'start_date' => 'required',
        //     'end_date' => 'required',
        //     'discount_type' => 'required',
        //     'parent_category' => 'required',
        //     'minimum_spend' => 'required',
        //     'maximum_spend' => 'required',
        //     'coupon_limit_per_quantity' => 'required',
        //     'coupon_limit_per_customer' => 'required',
        // ]);
        // dd($validator);
        // if($validator->fails()) {
        //     session()->flash("error", "You have to provide current Fields!");
        //     return back();
        // }
        
        $data = $request->all();
        $coupon = new Coupon;
        
        $coupon->title = $data['title'];
        $coupon->coupon_code = $data['coupon_code'];
        $coupon->quantity = $data['quantity'];
        $coupon->start_date = $data['start_date'];
        $coupon->end_date = $data['end_date'];
        $coupon->free_shipping = $data['shipping'];
        $coupon->discount_type = $data['discount_type'];
        $coupon->status = $data['status'];
        //$coupon->products = $data['products'];
        $coupon->parent_category = $data['parent_category'];
        $coupon->minimum_spend = $data['minimum_spend'];
        $coupon->maximum_spend = $data['maximum_spend'];
        $coupon->coupon_per_limit = $data['coupon_limit_per_quantity'];
        $coupon->coupon_per_customer = $data['coupon_limit_per_customer'];
        $coupon->created_by = Auth::user()->id;
        $coupon->type = 'admin';


        $coupon->save();
        session()->flash("success", "coupon Added Successfully!");
        
        return back();


        dd($request->all());
    }

    public function all_cupon(){

        return view('admin.coupon.all_coupon');
    }

    public function getcategories($category_name){
            
        $category_type = preg_split ("/\,/", $category_name); 
        $type = $category_type[1];
        $category_name = $category_type[0];
            
        $html = '';
            
            $categories = DB::table("category")
                           ->where("parent_category",'=',$category_name)
                           ->where('type','=',$type)
                           ->where('name','=',"")->get();
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
