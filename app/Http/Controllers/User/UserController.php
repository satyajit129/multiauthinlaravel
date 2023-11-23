<?php

namespace App\Http\Controllers\User;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $posts = Post::where('status', 1)->latest()->get();
        return view ('user.index',compact('posts'));
    }
}
