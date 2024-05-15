<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function pasangLoker(Request $request){
        $title = "Pasang Loker";
        return view("pages.PasangLoker", compact("title"));
    }
}
