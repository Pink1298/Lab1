<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function testlayout(){
    	return view('backend.layouts.testlayout');
    }
}