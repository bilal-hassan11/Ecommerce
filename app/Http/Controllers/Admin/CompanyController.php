<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User;
use App\Models\Companies;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Redirect, Validator;


class CompanyController extends Controller
{   
    public function index(Request $request){

        $data = array(
            'title' => 'All Companies',
            'CompaniesCategory' => Category::where('type','=','general')->get(),
            'users_data' => User::get(),
            'companies' => User::get(),
        );
       
        return view('admin.company.all_companies')->with($data);
    }

    public function search(){

        $data = array(
            'title' => 'All Users',
            'Company' => Company::where('name','like','%'.$request['search'].'%')
                            ->orWhere('username','like','%'.$request['search'].'%')
                            ->paginate(10),

        );
        return view('admin.companies.all_companies')->with($data);
    } 

}    