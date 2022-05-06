<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function index()
    {
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }




            return view('posts33', [
            "title" => "All Posts" . $title,
            "posts" => Post::with(['author', 'category'])->latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }


    public function show(post $post)
    {
        return view('post33', [
            "title" => "Single Posts",
            "post" => $post
        ]);
    }


}
