<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view ('posts.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
           'post-title' => ['required', 'max:128'],
           'post-body' => ['required'],
        ]);

        auth()->user()->posts()->create([
            'title' => $request['post-title'],
            'body' => $request['post-body'],
        ]);

        return back();
    }
}
