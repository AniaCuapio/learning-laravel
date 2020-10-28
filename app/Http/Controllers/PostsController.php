<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function render($post)
    {
    $postsArray =[
         'my-first-post' => 'Hello, this is my first blog post!',
         'my-second-post' => 'Hiiii, this is blogging'
    ];

     if (! array_key_exists ($post, $postsArray)) {
         abort (404, 'Sorry, that post was not found.');
        }

        return view('post', [
         'post' => $postsArray[$post]
        ]);
    }
}
