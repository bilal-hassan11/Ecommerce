<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\category;
use App\Models\Products;
use Redirect, Session, Auth ;

class Product extends Controller
{
    public function product(){

        $data = array(
            'product_code' => rand(1000000, 9999999),
            'title' => "Add Physical Product",
            'PhysicalCategories'=> category::where('type','physical')->where("name","!="," ")->get(),
            "subCategories" => category::where('type','physical')->where('name','=','')->where('parent_category','!=',' ')->get(),
        );
        return view('admin.product.add_product')->with($data);
    }

    public function save_product(Request $request){
        
        $validator = Validator::make($request->all(), [
            'product_title' => 'required|min:5',
            'product_price' => 'required|min:0',
            'product_quantity' => 'required',
            'product_category' => 'required',
            'product_description' => 'required|min:6',
            'product_image' => 'required',
            
        ]);
        
        if(empty($request->product_weight) && empty($request->product_size)){
            $validator->errors()->add('product_weight','You have to Provide Weight!');
        } 
        if($validator->fails()) {
            session()->flash("error", "You have to provide current Fields!");
            return Redirect::back()->withErrors($validator);
        }

        
        $size[] = $request->size;
        $collection = implode(",",$request->size);
         
        $imageName = time().'.'.$request->product_image->extension();  
        $request->product_image->move(public_path('uploads\physical_product'), $imageName);
  
        $data = $request->all();
        //dd($data);
        $product = new Products;
        $product->title = $data['product_title'];
        $product->price = $data['product_price'];
        $product->size = $collection;
        $product->image = $imageName;
        $product->user_id = $data['user_id'];
        $product->weight = $data['product_weight'];
        $product->product_barcode = $data['product_code'];
        $product->category = $data['product_category'];
        $product->type = $data['product_type'];
        $product->created_by = Auth::user()->name;
        $product->quantity = $data['product_quantity'];
        $product->description = $data['product_description'];
        $product->status = $data['product_status'];
        
        $product->save();

        session()->flash("success", "Product Successfully Added!");
        return back();
    }

    public function DigitalProduct(){

        $data = array(
            'product_code' => rand(1000000, 9999999),
            'title' => "Add Digital Product",
            'DigitalCategories'=> category::where('type','digital')->where("name","!="," ")->get(),
            "subCategories" => category::where('type','digital')->where('name','=','')->where('parent_category','!=',' ')->get(),
        );
        //dd($data['DigitalCategories']);
        return view('admin.digital-product.add_digital_product')->with($data);
    }
    
    public function save_DigitalProduct(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'product_title' => 'required|min:5',
            'product_price' => 'required|min:0',
            'product_weight' => 'required|min:0',
            'product_quantity' => 'required',
            'product_category' => 'required',
            'product_description' => 'required|min:6',
            'product_image' => 'required'
        ]);
        
        if(empty($request->product_weight) && empty($request->product_size)){
            $validator->errors()->add('product_weight','You have to Provide Weight!');
        } 
        if($validator->fails()) {
            session()->flash("error", "You have to provide current Fields!");
            return Redirect::back()->withErrors($validator);
        }

        
        $size[] = $request->size;
        $collection = implode(",",$request->size);
         
        $imageName = time().'.'.$request->product_image->extension();  
        $request->product_image->move(public_path('uploads\physical_product'), $imageName);
  
        $data = $request->all();
        $product = new Products;
        $product->title = $data['product_title'];
        $product->price = $data['product_price'];
        $product->size = $collection;
        $product->image = $imageName;
        $product->user_id = $data['user_id'];
        $product->weight = $data['product_weight'];
        $product->product_barcode = $data['product_code'];
        $product->category = $data['product_category'];
        $product->type = $data['product_type'];
        $product->quantity = $data['product_quantity'];
        $product->description = $data['product_description'];
        
        $product->save();
        Session::flash('digitalProduct','success');
        //session()->flash("success", "Product Successfully Added!");

        return back()->with('status','Product Added Successfully!');
    }

    public function all_product(){

        return view('admin.product.all_product');
    }

    public function all_digital_product(){
        $data = array(
            'title' => "All Digital Products",
            'Products' => Products::where('type','=','digital'),
        );
        return view('admin.product.all_product')->with($data);
    }

}
