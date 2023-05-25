<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('admin.posts.index',compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->all());
        if ($request->hasFile('media')) {
            $post->addMediaFromRequest('media')
                ->toMediaCollection('media');
        }
        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return redirect()->route('posts.edit', $post)
        ->with('success','Post update succesfully');
    }

    
    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }
}
