<?php

namespace App\Http\Controllers;

use App\Models\Country;

class CountryController extends Controller
{
    public function index(){
        
        $countries = DB::table("countries")->pluck("name","id");
        return view('admin.coupon.coupon-create',compact('countries'));
    }
        
    public function getState(Request $request){
        
        $states = DB::table("states")
                ->where("country_id",$request->country_id)
                ->pluck("name","id");

        return response()->json($states);
    }
        
    public function getCity(Request $request){
        
        $cities = DB::table("cities")
                    ->where("state_id",$request->state_id)
                    ->pluck("name","id");
        return response()->json($cities);
        }
}