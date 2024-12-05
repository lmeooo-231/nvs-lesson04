<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NvsProductController extends Controller
{
    public function nvsIndex()
    {
        $fruit = array("apple","orange");
        return view('test', ["fruit"=>$fruits]);
    }
}
