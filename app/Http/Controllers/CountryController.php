<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Illuminate\Http\Request;
use DB;

class CountryController extends Controller
{
    public function index(){
        
        $countries = Country::pluck("name","id");
        return view('admin.coupon.coupon-create',compact('countries'));
    }
        
    public function getState(Request $request){
        $states = DB::table("states")
            ->where("country_id",$request->country_id)
            ->pluck("name","id");
        return response()->json($states);
    }
        
    public function getCity(Request $request){
        
        $cities = City::where("state_id",$request->state_id)->pluck("name","id");
            return response()->json($cities);
    }
}