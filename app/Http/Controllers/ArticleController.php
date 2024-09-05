<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();

        // Return the 'article' view with the posts data
        return view('article', ['posts' => $posts]);
    }
}
