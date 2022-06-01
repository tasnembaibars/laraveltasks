<?php


namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class user_control extends Controller
{
   
public function getdata(){
 $info=users::all();
 return view('regester',compact('info'));
}

public function getid(){
$id=request('id');
$info=users::where('id',$id)->first();
return view('user',compact('info'));
}
}