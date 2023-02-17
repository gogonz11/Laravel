<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = 'in ' . $category->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = 'by ' . $author->name;
        }

        // dd(request('search'));

        return view('posts', [

            "title"     => "All Blog . $title",
            "active"     => 'blog',
            "posts"     => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    //route model binding
    public function show(Post $post)
    {
        return view('post', [

            "title" => "Single Blog",
            "active"     => 'blog',
            "post"  => $post
        ]);
    }
}
