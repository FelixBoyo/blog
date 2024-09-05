<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store()
    {
        
        $post = Post::create(
            [
            'content' => request()->get('content', ''),
            'title' => request()->get('title', ''),
            ]
        );
        
        return redirect()->route('article.index')->with('success', 'Post created successfully!');
    }
    
}
