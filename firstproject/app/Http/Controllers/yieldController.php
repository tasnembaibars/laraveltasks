<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class yieldController extends Controller
{
   public function pass(){
       $names=['omar','rama','marah'];
       return view('home',['names'=>$names]);
   }
   public function passhome(){
    return view('about');
}

}
