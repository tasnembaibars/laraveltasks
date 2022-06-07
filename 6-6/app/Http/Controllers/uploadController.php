<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    //
    function index(Request $request){
        return $request->file('file')->store('files');
    }
}
