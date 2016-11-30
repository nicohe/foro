<?php

use App\Post;

class PostModelTest extends TestCase
{
  function test_adding_a_tittle_generates_a_slug()
  {
    $post = new Post([
      'title' => 'COmo instalar laravel'
    ]);

    $this->assertSame('como-instalar-laravel', $post->slug);

  }

  
}
