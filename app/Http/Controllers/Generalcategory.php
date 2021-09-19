<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Redirect;


class Generalcategory extends Controller
{
    public function index(Request $request){
        
        $data = array(
            'title' => 'Add Companies Category',
            'CompaniesCategory' => Category::where('type','=','general')->where('deleted_at',Null)->get(),
        );
        //Categry data for update
        // if(isset($request['category_id'])){
        //     $data['update'] = true;
        //     $data['update_category'] = category::where('id',hashids_decode($request['category_id']))->first();
        //     $data['title']  = 'Update category';
        // }

        return view('admin.companies-category.all_categories')->with($data);
    }

    public function save(Request $request){
        dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:5',
            'logo' => 'required'
        ]);
        
        if($validator->fails()) {
            session()->flash("error", "You Have To Provide Current Fields!");
            return back();
        }
        
        if(Category::where('name',$request->name)->exists() && Category::where('deleted_at',Null)){            
            
            session()->flash("error", "Category Already Exist!");
            return back();
        } 

        $imageName = time().'.'.$request->logo->extension();       
        $request->logo->move(public_path('uploads\physical_category'), $imageName);
  
        $data = $request->all();
        $category = new Category;
        
        $category->name = $data['name'];
        $category->image = $imageName;
        $category->type = $data['category_type'];
        
        $category->save();
        session()->flash("success", "Category Added Successfully!");
        
        return back(); 
    }

    public function delete(Request $request)
    {   
       //dd($request->all());
        Category::find($request->id)->where('type','=',$request->type)->delete();
        
        return back(); 
    }

    public function search(Request $request){
       
        $key = $request['search'];
        $data = array(
            'title' => 'All categories',
            'categories' => Category::where('title','like','%'.$key.'%')
                            ->paginate(10),

        );
        return view('admin.categorys.all_categories')->with($data);
    }
}




