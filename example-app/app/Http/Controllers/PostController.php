<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost()
{
$cats = Category::orderBy('name','ASSC')->select('id','name')->get();
return view('admin.createpost',compact('cats'));
}
public function create(array $data)
{
return Post::create([
'post_title' => $data['post_title'],
'post_content' => $data['post_content'],
'post_imgpagecove' => $data['post_imgpagecove']
]);}

}


