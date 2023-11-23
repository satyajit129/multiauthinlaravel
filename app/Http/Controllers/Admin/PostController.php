<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
   public function index()
    {
        $posts = Post::latest()->get();
        return view('post.index', compact('posts'));
    } 
    public function create()
    {
        return view('post.create');
    }
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $create = Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);


        // Redirect or do something else after saving the post
        return redirect(route('admin.post'));
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        // Assuming you have a Blade view for editing, adjust the view name as needed
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = Post::findOrFail($id);
        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            // Add other fields as needed
        ]);

        // Redirect or do something else after updating the post
        return redirect(route('admin.post'));
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        // Redirect or do something else after deleting the post
        return redirect(route('admin.post'));
    }
}
