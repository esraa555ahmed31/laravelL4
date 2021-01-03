<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lab2 extends Controller
{
    function getPost() {
        $posts=[
            "b1"=>['title'=>'title1','body'=>'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco'],
            "b2"=>['title'=>'title2','body'=>'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco'],
            "b3"=>['title'=>'title3','body'=>'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco'],
        ];
        return view('posts',["post"=>$posts]);

    }
    function getBody($key) {
        $posts=[
            "b1"=>['title'=>'title1','body'=>'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco'],
             "b2"=>['title'=>'title2','body'=>'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco'],
             "b3"=>['title'=>'title3','body'=>'Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco'],
         ];
         $mypost=$posts[$key]['body'];
    
        return view('post',["post"=>$mypost]);
    }
    // function getBody($key) {
    //     $posts=[
    //         "b1"=>['title'=>'title1','body'=>'body1'],
    //          "b2"=>['title'=>'title2','body'=>'body2'],
    //          "b3"=>['title'=>'title3','body'=>'body3'],
    //      ];
    //      $mypost=$posts;
    
    //     return view('post',["post"=>$mypost],['key'=>$key]);
    // }
}
