<?php

namespace App\Http\Controllers;
use App\Models\movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
   public function show(){
       $movie= movie::all();
       return view('list',['movies'=>$movie]);
   }
   public function add(Request $request){
    $request->file('image')->storeAs('public/img',$request->image->getClientOriginalName());
     $movie=new movie;
     $movie->movie_image= $request->image->getClientOriginalName();
     $movie->movie_name=$request->name;
     $movie->movie_genre=$request->genre;
     $movie->movie_description=$request->desc;
     $movie->save();
     return redirect('list');
     
   }
   public function delete($id){
       $movie=movie::find($id); 
       $movie->delete();
       return redirect('list');
   }
   public function edit($id){
      $movie=movie::find($id);
      return view('update',['movie'=>$movie]);
   }
   public function editdata(Request $request){
    $request->file('image')->storeAs('public/img',$request->image->getClientOriginalName());
     $movie=movie::find($request->id);
     $movie->movie_image= $request->image->getClientOriginalName();
     $movie->movie_name=$request->name;
     $movie->movie_genre=$request->genre;
     $movie->movie_description=$request->desc;
     $movie->save();
     return redirect('list');
   }
//    public function view(){
//     $movie= movie::all();
//     return view('view',['movies'=>$movie]);
// }
}
