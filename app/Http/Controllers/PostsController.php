<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostsController extends Controller
{
    public function index() {

        return view('posts.index', [
            'posts' => Post::latest()->filter(
                request(['search','category','author'])
            )->paginate(9)->withQueryString(),
        ]);
    }
    public function show(Post $post){
        return view('posts.show', [
            'post' => $post
        ]);
    }

}
