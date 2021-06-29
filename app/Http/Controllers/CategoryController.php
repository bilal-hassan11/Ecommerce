<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Redirect;

class CategoryController extends Controller
{
    public function PhysicalCategory(Request $request){
        
        $data = array(
            'title' => 'Add Physical Category',
            'PhysicalCategories' => category::where('type','physical')->where('name',"!=","")->get(),
        );
        //Categry data for update
        // if(isset($request['category_id'])){
        //     $data['update'] = true;
        //     $data['update_category'] = category::where('id',hashids_decode($request['category_id']))->first();
        //     $data['title']  = 'Update category';
        // }

        return view('admin.category.add_PhysicalCategory')->with($data);
    }

    public function save_PhysicalCategory(Request $request){
        
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|min:5',
            'category_image' => 'required',
        ]);
        
        if($validator->fails()) {
            session()->flash("error", "You have to provide current Fields!");
            return back();
        }
        
        $imageName = time().'.'.$request->category_image->extension();       
        $request->category_image->move(public_path('uploads\physical_category'), $imageName);
  
        $data = $request->all();
        $category = new category;
        
        $category->name = $data['category_name'];
        $category->image = $imageName;
        $category->type = $data['category_type'];

        $category->save();
        session()->flash("success", "Category Added Successfully!");
        
        return back(); 
    }

    public function search(Request $request){
       
        $key = $request['search'];
        $data = array(
            'title' => 'All categories',
            'categories' => category::where('first_name','like','%'.$key.'%')
                            ->orWhere('last_name','like','%'.$key.'%')
                            ->orWhere('categoryname','like','%'.$key.'%')
                            ->orWhere('email','like','%'.$key.'%')
                            ->orWhere('nic','like','%'.$key.'%')
                            ->orWhere('contact_number','like','%'.$key.'%')
                            ->paginate(10),

        );
        return view('admin.categorys.all_categories')->with($data);
    }

    public function DigitalCategory(Request $request){
        
        $data = array(
            'title' => 'Add Digital Category',
            'DigitalCategories' => category::where('type','digital')->get(),
        );

        //Categry data for update
        // if(isset($request['subcategory_id'])){
        //     $data['update'] = true;
        //     $data['update_category'] = category::where('id',hashids_decode($request['category_id']))->first();
        //     $data['title']  = 'Update category';
        // }

        return view('admin.category.add_DigitalCategory')->with($data);
    }

    public function save_digital_category(Request $request){
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|min:5',
            'category_image' => 'required',
        ]);
        
        if($validator->fails()) {
            session()->flash("error", "You have to provide current Fields!");
            return back();
        }
        
        $imageName = time().'.'.$request->category_image->extension();  
     
        $request->category_image->move(public_path('uploads\physical_category'), $imageName);
  
        $data = $request->all();
        $category = new category;
        
        $category->name = $data['category_name'];
        $category->image = $imageName;
        $category->type = $data['category_type'];

        $category->save();
        session()->flash("success", "Category Added Successfully!");
        
        return back();

    }

    public function Sub_DigitalCategory(){

        $data = array(
            'title' => 'Add Physical Category',
            'DigitalCategories' => category::where('type','digital')->where('name',"!=","")->get(),
            'sub_category' => category::where('type','digital')
                            ->where('sub_category',"!=","")
                            ->where('parent_category',"!=","")->get(),
        );
        //Categry data for update
        // if(isset($request['category_id'])){
        //     $data['update'] = true;
        //     $data['update_category'] = category::where('id',hashids_decode($request['category_id']))->first();
        //     $data['title']  = 'Update category';
        // }

        return view('admin.category.add_DigitalSubCategory')->with($data);
    }

    public function save_sub_DigitalCategory(Request $request){
        
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'sub_category' => 'required|min:5',
            'parent_category' => 'required|min:5',
            'category_image' => 'required',
        ]);
        
        if($validator->fails()) {
            session()->flash("error", "You have to provide current Fields!");
            return back();
        }
        
        $imageName = time().'.'.$request->category_image->extension();  
     
        $request->category_image->move(public_path('uploads\physical_category'), $imageName);
  
        $data = $request->all();
        $category = new category;
        
        $category->sub_category = $data['sub_category'];
        $category->image = $imageName;
        $category->type = $data['category_type'];
        $category->parent_category = $data['parent_category'];
        
        $category->save();
        session()->flash("success", "Category Added Successfully!");
        
        return back();

    }

    public function search_subcategory(Request $request){
       
        $key = $request['search'];
        $data = array(
            'title' => 'All categories',
            'categories' => subcategory::where('first_name','like','%'.$key.'%')
                            ->orWhere('last_name','like','%'.$key.'%')
                            ->orWhere('categoryname','like','%'.$key.'%')
                            ->orWhere('email','like','%'.$key.'%')
                            ->orWhere('nic','like','%'.$key.'%')
                            ->orWhere('contact_number','like','%'.$key.'%')
                            ->paginate(10),

        );
        return view('admin.subcategory.all_subcategories')->with($data);
    }

    public function Sub_PhysicalCategory(){

        $data = array(
            'title' => 'Add Physical Category',
            'DigitalCategories' => category::where('type','physical')->where('name',"!=","")->get(),
            'sub_category' => category::where('type','physical')
                            ->where('sub_category',"!=","")
                            ->where('parent_category',"!=","")->get(),
        );
        //Categry data for update
        // if(isset($request['category_id'])){
        //     $data['update'] = true;
        //     $data['update_category'] = category::where('id',hashids_decode($request['category_id']))->first();
        //     $data['title']  = 'Update category';
        // }

        return view('admin.category.add_PhysicalSubCategory')->with($data);
    }

    public function save_sub_PhysicalCategory(Request $request){
        
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'sub_category' => 'required|min:5',
            'parent_category' => 'required|min:5',
            'category_image' => 'required',
        ]);
        
        if($validator->fails()) {
            session()->flash("error", "You have to provide current Fields!");
            return back();
        }
        
        $imageName = time().'.'.$request->category_image->extension();  
     
        $request->category_image->move(public_path('uploads\physical_category'), $imageName);
  
        $data = $request->all();
        $category = new category;
        
        $category->sub_category = $data['sub_category'];
        $category->image = $imageName;
        $category->type = $data['category_type'];
        $category->parent_category = $data['parent_category'];
        
        $category->save();
        session()->flash("success", "Category Added Successfully!");
        
        return back();

    }

}
