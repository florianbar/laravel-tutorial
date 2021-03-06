<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
    	return view('posts.index');
    }

    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        // $post = new Post;
        // $post->title = request('title');
        // $post->body = request('body');

        // // Save it to the database
        // $post->save();

        Post::create(request(['title', 'body']));

        // And then redirect to the home page
        return redirect('/');
    }
}
