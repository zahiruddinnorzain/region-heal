<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class MainController extends Controller
{
    function index(Request $request){

        $data = Data::select('*')->inRandomOrder()->get();

        return view('main',[
          "datas" => $data,
        ]);

    }
}
