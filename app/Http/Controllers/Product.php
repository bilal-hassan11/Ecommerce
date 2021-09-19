<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Company;
use App\Models\category;
use App\Models\User;
use App\Models\Products;
use Redirect, Session, Auth ;

class Product extends Controller
{
    public function product(){

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz#$%^&*';
        $data = array(
            "productCode"=> substr(str_shuffle($permitted_chars), 0, 10),
            'title' => "Add Physical Product",
            "Companies" => Company::get(),
            'users_data' => User::get(),
            'PhysicalCategories'=> category::where('type','physical')->where("name","!="," ")->get(),
            "subCategories" => category::where('type','physical')->where('name','=','')->where('parent_category','!=',' ')->get(),
        );
        return view('admin.product.add_product')->with($data);
    }

    // public function save_product(Request $request){
        
    //     $validator = Validator::make($request->all(), [
    //         'product_title' => 'required|min:5',
    //         'product_price' => 'required|min:0',
    //         'product_quantity' => 'required',
    //         'product_category' => 'required',
    //         'product_description' => 'required|min:6',
    //         'product_image' => 'required',
            
    //     ]);
        
    //     if(empty($request->product_weight) && empty($request->product_size)){
    //         $validator->errors()->add('product_weight','You have to Provide Weight!');
    //     } 
    //     if($validator->fails()) {
    //         session()->flash("error", "You have to provide current Fields!");
    //         return Redirect::back()->withErrors($validator);
    //     }

        
    //     $size[] = $request->size;
    //     $collection = implode(",",$request->size);
         
    //     $imageName = time().'.'.$request->product_image->extension();  
    //     $request->product_image->move(public_path('uploads\physical_product'), $imageName);
  
    //     $data = $request->all();
    //     //dd($data);
    //     $product = new Products;
    //     $product->title = $data['product_title'];
    //     $product->price = $data['product_price'];
    //     $product->size = $collection;
    //     $product->image = $imageName;
    //     $product->user_id = $data['user_id'];
    //     $product->weight = $data['product_weight'];
    //     $product->product_barcode = $data['product_code'];
    //     $product->category = $data['product_category'];
    //     $product->type = $data['product_type'];
    //     $product->created_by = Auth::user()->name;
    //     $product->quantity = $data['product_quantity'];
    //     $product->description = $data['product_description'];
    //     $product->status = $data['product_status'];
        
    //     $product->save();

    //     session()->flash("success", "Product Successfully Added!");
    //     return back();
    // }

    public function DigitalProduct(){

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz#$%^&*';
        
        if(Auth::guard('web')->user()->status == "user"){
            $data = array(
                'title' => "Add Digital Product",
                "Companies" => Company::get(),
                "productCode"=> substr(str_shuffle($permitted_chars), 0, 10),
                'DigitalCategories'=> category::where('type','digital')->where("name","!="," ")->get(),
                "subCategories" => category::where('type','digital')->where('name','=','')->where('parent_category','!=',' ')->get(),
            );

            return view('admin.digital-product.add_digital_product')->with($data);
        }
        $data = array(
            'title' => "Add Digital Product",
            "Companies" => Company::get(),
            "productCode"=> substr(str_shuffle($permitted_chars), 0, 10),
            'DigitalCategories'=> category::where('type','digital')->where("name","!="," ")->get(),
            "subCategories" => category::where('type','digital')->where('name','=','')->where('parent_category','!=',' ')->get(),
        );
        
        return view('admin.digital-product.add_digital_product')->with($data);
    }
    
    public function save_Product(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'product_title' => 'required',
            'product_price' => 'required',
            'product_company' => 'required',
            'product_status' => 'required',
            'product_quantity' => 'required',
            'product_description' => 'required',
            'product_category' => 'required',
        ]);
        
        if($validator->fails()) {
            session()->flash("error", "You have to provide current Fields!");
            return back();
        }

        if(isset($request->product_title) && $request->product_title != "" ){
            
            //dd($request->all());
            //$size[] = $request->size;
            $collection = implode(",",$request->size);
            
            $product_images = [];
            
            if($request->hasfile('product_image'))
            {
                foreach($request->file('product_image') as $img)
                {
                    $name = time().'.'.$img->extension();
                    $img->move(public_path('uploads\Product'), $name);  
                    $product_images[] = $name;  
                    
                }
            }
            
            $pic = implode(",",$product_images);
            
            // $imageName = time().'.'.$request->product_image->extension();  
            // $request->product_image->move(public_path('uploads\Product'), $imageName);

            $total_weight = $request->product_weight.$request->weight_meter;
            $data = $request->all();
            $product = new Products;
            $product->title = $data['product_title'];
            $product->price = $data['product_price'];
            $product->size = $collection;
            $product->image = $pic;
            $product->user_id = $data['user_id'];
            $product->weight = $total_weight;
            $product->product_company = $data['product_company'];
            $product->product_code = $data['product_code'];
            $product->parent_category = $data['product_category'];
            $product->sub_category = $data['sub_category'];
            $product->status = $data['product_status'];
            $product->type = $data['product_type'];
            $product->quantity = $data['product_quantity'];
            $product->description = $data['product_description'];
            $product->created_by = "admin";
            
            $product->save();
            if($product->type = "Physical"){
                return response()->json([
                    'success'=>"Physical Product Added Successfully!",
                    'redirect'  => route('admin.product.show'),
                ]);

            }else{
                return response()->json([
                    'success'=>"Physical Product Added Successfully!",
                    'redirect'  => route('admin.digital_product.show'),
                ]);
            }
             
            
        } 
    }

    public function all_product(){

        $data = array(
            'title' => "All Digital Products",
            'users_data' => User::get(),
            'Products' => Products::where('type','=','physical')->paginate(12),
        );
        return view('admin.product.all_product')->with($data);
    }

    public function all_digital_product(){
        
        $data = array(
            'title' => "All Digital Products",
            'users_data' => User::get(),
            'Products' => Products::where('type','=','digital')->paginate(12),
        );
        return view('admin.digital-product.all_digital_product')->with($data);
    }

}
