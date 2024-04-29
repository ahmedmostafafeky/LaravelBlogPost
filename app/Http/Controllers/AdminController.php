<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    //
    public function show() {
        return view('admin.dashboard', [
            'posts' => Post::paginate(50)
        ]);
    }
    public function create() {
        return view('posts.create');
    }
    public function store()
    {
        Post::create(array_merge($this->validatePost(), [
            'user_id' => auth()->id() ,
            'thumbnail' => request()->file('thumbnail')->store('thumbnails')
        ]));

        return redirect('/');

    }
    public function edit(Post $post) {
        return view('admin.edit',[
            'post' => $post
        ]);
    }
    public function update(Post $post) {
        $attributes = request()->validate([
            'slug' => ["required" , Rule::unique('posts','slug')->ignore($post) , 'regex:/^[\pL\-]+$/u'],
            'body' => "required",
        ]);
        $post->update($attributes);
        return back()->with('success','Post Updated');
    }
    public function delete(Post $post) {
        $post->delete();
        return back()->with('success','Post Deleted!');
    }
    protected function validatePost(?Post $post = null) {
        $post ??= new Post;
        return request()->validate([
            'title' => "required",
            'thumbnail' => "required|image",
            'slug' => ["required" , Rule::unique('posts','slug')->ignore($post) , 'regex:/^[\pL\-]+$/u'],
            'excert' => "required",
            'body' => "required",
            'category_id' => ['required',Rule::exists('categories','id')]
        ]);

    }
}
