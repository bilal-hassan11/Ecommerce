<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\DBS;

class DbsController extends Controller
{
    public function index(Request $request){

        $data = array(
            'title' => 'All DBS',
            'DBS' => DBS::latest()->get(),
        );
        
        return view('admin.dbs.all_dbs')->with($data);
    }

    public function save_dbs(Request $request){
        
        $data = $request->all();

        if(isset($data['dbs_id']) && !empty($data['dbs_id'])){
            $dbs = DBS::find(($data['dbs_id']));
            $dbs->dbs_name = $data['dbs_name'];
            $dbs->username = $data['username'];
            $dbs->password = $data['password'];
            $dbs->save();

            return response()->json([
                'success'  => 'DBS has been updated',
                'redirect'  => route('dbs.show'),
            ]);
            
        }else{
            $dbs = new DBS;
            $dbs->dbs_name = $data['dbs_name'];
            $dbs->username = $data['username'];
            $dbs->password = $data['password'];
            $dbs->save();

            return response()->json([
            'success'   => 'DBS has been added',
            'reload'    => true,
            ]);
        }
    }

        public function search(Request $request){
            $data = array(
                'title' => 'All Users',
                'DBS' => DBS::where('dbs_name','like','%'.$request['search'].'%')
                                ->orWhere('username','like','%'.$request['search'].'%')
                                ->paginate(10),

            );
            return view('admin.dbs.all_dbs')->with($data);
        }


        public function downloadPDF(){

            $dbs = DBS::all();
            $pdf = PDF::loadview('employee',compact('employees'));
            return $pdf->download('employee.pdf'); 
        }

}
