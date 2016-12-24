<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\{Comment, Post};

class CommentController extends Controller
{
  public function store(Request $request, Post $post)
  {
    //todo: Add validation!
    auth()->user()->comment($post, $request->get('comment'));
    return redirect($post->url);
  }

  public function accept(Comment $comment)
  {
    $this->authorize('accept', $comment);

    $comment->markAsAnswer();

    return redirect($comment->post->url);
  }

}
