<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Redirect;

class CategoryController extends Controller
{
    public function PhysicalCategory(Request $request){
        
        $data = array(
            'title' => 'Add Physical Category',
            'users_data' => User::get(),
            'PhysicalCategories' => category::where('type','physical')->where('name',"!=","")->where('deleted_at',Null)->paginate(10),
        );
        //Categry data for update
        // if(isset($request['category_id'])){
        //     $data['update'] = true;
        //     $data['update_category'] = category::where('id',hashids_decode($request['category_id']))->first();
        //     $data['title']  = 'Update category';
        // }

        return view('admin.category.add_PhysicalCategory')->with($data);
    }

    // public function save_PhysicalCategory(Request $request){
        
    //     $validator = Validator::make($request->all(), [
    //         'category_name' => 'required|min:5',
    //         'category_image' => 'required',
    //     ]);
        
    //     if($validator->fails()) {
    //         session()->flash("error", "You have to provide current Fields!");
    //         return back();
    //     }
        
    //     $imageName = time().'.'.$request->category_image->extension();       
    //     $request->category_image->move(public_path('uploads\physical_category'), $imageName);
  
    //     $data = $request->all();
    //     $category = new category;
        
    //     $category->name = $data['category_name'];
    //     $category->image = $imageName;
    //     $category->type = $data['category_type'];

    //     $category->save();
    //     session()->flash("success", "Category Added Successfully!");
        
    //     return back(); 
    // }


    public function DigitalCategory(Request $request){
        
        $data = array(
            'title' => 'Add Digital Category',
            'users_data' => User::get(),
            'DigitalCategories' => category::where('type','digital')->where('deleted_at',Null)->paginate(10),
        );

        //Categry data for update
        // if(isset($request['subcategory_id'])){
        //     $data['update'] = true;
        //     $data['update_category'] = category::where('id',hashids_decode($request['category_id']))->first();
        //     $data['title']  = 'Update category';
        // }

        return view('admin.category.add_DigitalCategory')->with($data);
    }

    public function save_category(Request $request){
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        
        if($validator->fails()) {
            session()->flash("error", "You Have To Provide Current Fields!");
            return back();
        }
        
         if(Category::where('name',$request->name)->where('type',$request->category_type)->whereNUll('deleted_at')->exists()){            
                
            session()->flash("error", "Category Already Exist!");
            return back();
            
        } 

        $imageName = time().'.'.$request->logo->extension();       
        $request->logo->move(public_path('uploads\category'), $imageName);
  
        $data = $request->all();
        $category = new Category;
        
        $category->name = $data['name'];
        $category->image = $imageName;
        $category->type = $data['category_type'];
        
        $category->save();
        session()->flash("success", "Category Added Successfully!");
        
        return back(); 
        //dd($request->all());
        // $validator = Validator::make($request->all(), [
        //     'category_name' => 'required|min:5|unique:category,name',
        //     'category_image' => 'required',
        // ]);
        // if($validator->errors('category_name.unique')){
        //     session()->flash("error", "Category Should Be Unique!");
        //     return back();
        // } 
        
        // if($validator->fails()) {
        //     session()->flash("error", "You have to provide current Fields!");
        //     return back();
        // }
        
        // $imageName = time().'.'.$request->category_image->extension();  
     
        // $request->category_image->move(public_path('uploads\category'), $imageName);
  
        // $data = $request->all();
        // $category = new category;
        
        // $category->name = $data['category_name'];
        // $category->image = $imageName;
        // $category->type = $data['category_type'];

        // $category->save();
        // session()->flash("success", "Category Added Successfully!");
        
        // return back();

    }

    public function Sub_DigitalCategory(){

        $data = array(
            'title' => 'Add Physical Category',
            'users_data' => User::get(),
            'DigitalCategories' => category::where('type','digital')->where('name',"!=","")->where('deleted_at',Null)->get(),
            'sub_category' => category::where('type','digital')
                            ->where('sub_category',"!=","")
                            ->where('parent_category',"!=","")->paginate(10),
        );
        //Categry data for update
        // if(isset($request['category_id'])){
        //     $data['update'] = true;
        //     $data['update_category'] = category::where('id',hashids_decode($request['category_id']))->first();
        //     $data['title']  = 'Update category';
        // }

        return view('admin.category.add_DigitalSubCategory')->with($data);
    }

    public function save_subCategory(Request $request){
        
        $validator = Validator::make($request->all(), [
            'sub_category' => 'required|min:5|unique:category,name',
            'parent_category' => 'required|min:5',
            'category_image' => 'required',
        ]);
            
        if($validator->fails()) {
            session()->flash("error", "You have to provide current Fields!");
            return back();
        }
        
        
        $imageName = time().'.'.$request->category_image->extension();  
        $request->category_image->move(public_path('uploads\category'), $imageName);
  
        $data = $request->all();
        $category = new category;
        
        $category->sub_category = $data['sub_category'];
        $category->image = $imageName;
        $category->type = $data['category_type'];
        $category->parent_category = $data['parent_category'];
        
        $category->save();
        session()->flash("success", "Sub Category Added Successfully!");
        
        return back();

    }


    public function Sub_PhysicalCategory(){

        $data = array(
            'title' => 'Add Physical Category',
            'users_data' => User::get(),
            'PhysicalCategories' => category::where('type','physical')->where('name',"!=","")->where('deleted_at',Null)->get(),
            'sub_category' => category::where('type','physical')
                            ->where('sub_category',"!=","")
                            ->where('parent_category',"!=","")->where('deleted_at',Null)->paginate(10),
        );
        //Categry data for update
        // if(isset($request['category_id'])){
        //     $data['update'] = true;
        //     $data['update_category'] = category::where('id',hashids_decode($request['category_id']))->first();
        //     $data['title']  = 'Update category';
        // }

        return view('admin.category.add_PhysicalSubCategory')->with($data);
    }

    // public function save_sub_PhysicalCategory(Request $request){
        
    //     //dd($request->all());
    //     $validator = Validator::make($request->all(), [
    //         'sub_category' => 'required|min:5',
    //         'parent_category' => 'required|min:5',
    //         'category_image' => 'required',
    //     ]);
        
    //     if($validator->fails()) {
    //         session()->flash("error", "You have to provide current Fields!");
    //         return back();
    //     }
        
    //     $imageName = time().'.'.$request->category_image->extension();  
     
    //     $request->category_image->move(public_path('uploads\physical_category'), $imageName);
  
    //     $data = $request->all();
    //     $category = new category;
        
    //     $category->sub_category = $data['sub_category'];
    //     $category->image = $imageName;
    //     $category->type = $data['category_type'];
    //     $category->parent_category = $data['parent_category'];
        
    //     $category->save();
    //     session()->flash("success", "$category->type. SCategory Added Successfully!");
        
    //     return back();

    // }

    public function getsubcategory($id){
        
        $category = DB::table("category")->where('id','=',$id)->get();
        
        $html = '';
            
            $categories = DB::table("category")
                            ->where("parent_category",$category[0]->name)
                            ->where('type',$category[0]->type)
                            ->where('name',Null)->get();
           
            if(count($categories)>0){
                foreach($categories AS $category){
                    $html .= '<option value="'.$category->sub_category.'">'.$category->sub_category.'</option>';
                }
                return $html;
            }else{
                $html .= "<option value=''>No Sub categories</option>";
                return $html;
            }
    }

    public function delete(Request $request)
    {   
       
        Category::where('id',$request->id)->where('type','=',$request->type)->delete();
        
        return back()->reload(); 
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
}
