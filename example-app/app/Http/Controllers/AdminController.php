<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function getPosts()
    {
        $posts = Post::all();
        return view('Admin.editButton', ['posts' => $posts]);
    }
    public function editPost($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('Admin.updatePost', ['post' => $post,'categories' => $categories]);
    }
    public function updatePost(Request $request, $id)
    {
        $post = Post::find($id);
        $post->postTitle = $request->input('title');
        $post->postContent = $request->input('content');
        $post->categories()->detach();
        foreach ($request->input('category') as $category) {
            $post->categories()->attach($category);
        }
        if (!$request->file('image')) {
            unset($request->image);
        }else {
            $fileName = time() . '.' . $request->image->getClientOriginalExtension();
            $post->postImgpagecove = $fileName;
            $request->image->move(public_path('giaodienbe/www.portotheme.com/wordpress/porto/business-consulting3/wp-content/uploads/sites/204/2021/02/'), $fileName);
        }
        $post->update();
        $post->save();
        return redirect('listing');
    }
    public function index() {
        return view('admin-login');
    }

    public function show_dashboard(){
        return view('admin-layout');

    }
}
