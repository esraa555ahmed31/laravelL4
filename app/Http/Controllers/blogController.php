<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Http\Request;

class blogController extends Controller
{
   public function getBlogs(){
       $blogs=Blog::all();
     //    dd($blogs);
     // dump($blogs);

     return view('myBlogs',["blog"=>$blogs]);
   }

   public function create(){
    
    // dd('wejbh');
      return view('addForm');
    }
    public function store(){
        // dd($_POST);
        $data=request();
        //  return $data['title'];
        $newBlog=new Blog;
        $newBlog->title=$data['title'];
        $newBlog->body=$data['body'];
       
        $newBlog->version=5;
        $newBlog->save();
        return redirect('/blogs');

       
        }
}
