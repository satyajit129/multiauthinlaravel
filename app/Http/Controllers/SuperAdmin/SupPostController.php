<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupPostController extends Controller
{
    public function index()
    {
        //    dd('aaaaaaaaa');
        $posts = Post::where('status', 0)->latest()->get();

        return view('superadmin.index', compact('posts'));
    }
    public function approve($id)
    {
        $post = Post::find($id);

        if (!$post) {

            abort(404, 'Post not found');
        }


        $post->status = 1;
        $post->save();

        return redirect()->route('super-admin.post');
    }
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect(route('super-admin.post'));
    }
}
