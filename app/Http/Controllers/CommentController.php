<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\{Comment, Post};
// use App\Comment;
// use App\Post;

class CommentController extends Controller
{
  public function store(Request $request, Post $post)
  {
    //todo: Add validation!
    auth()->user()->comment($post, $request->get('comment'));
    return redirect($post->url);
  }

}
