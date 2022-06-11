<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ListingController extends Controller
{
    // public function listing(Request $request, $model){
    //     echo $model;

    // }
    public function listing(){
        $posts = Post::all();
        return view('listing',['posts'=> $posts]);
    }
}
