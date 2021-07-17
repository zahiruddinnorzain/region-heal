<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Laut;
use DB;

class MainController extends Controller
{
    function index(Request $request){

        $data = Data::select('*')->inRandomOrder()->get();

        return view('main',[
          "datas" => $data,
        ]);

    }

    function throw_bottle(Request $request){

         $memory_data = $request->get('memory_data');
         // dd($memory_data);
         if($memory_data == null){
            return 'none';
         }

        DB::beginTransaction();
        try {

            Laut::create([
                    'surat' => $memory_data,
                    'active' => 1,
                ]);
        
            DB::commit();
            return 'added';
        
        }catch(\Exception $e){
        
            DB::rollback();
            \Log::error($e);
            return 'error';
        }

        $data = Data::select('*')->inRandomOrder()->get();

        return view('main',[
          "datas" => $data,
        ]);

    }
}
