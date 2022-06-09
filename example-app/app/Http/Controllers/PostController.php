<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    //
    public function getPosts(){
        $posts = Post::all();
       return view('Auth.pagehome', ['posts' => $posts]);
    }

    public function getPostsEachCategoryId($categoryId){
        $category = Category::find($categoryId)->categoryName;
        $postById = Category::find($categoryId)->posts()->get();
        // ->where('id', $categoryId);
        // $test = $postById->categories()->get();
        // var_dump($postById); die();
        return view('categoryresult',['postById' => $postById, 'category' => $category]);
    }
}
