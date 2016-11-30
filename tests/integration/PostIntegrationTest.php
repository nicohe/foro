<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Post;

class PostIntegrationTest extends TestCase
{
    use DatabaseTransactions;

    public function test_a_slug_is_generated_and_saved_to_the_database()
    {
      $user = $this->defaultUser([
        'name' => 'Nombre Usuario',
      ]);

      $post = factory(\App\Post::class)->make([
        'title' => 'como-instalar-laravel',
      ]);

      $user->posts()->save($post);


      // $this->assertSame('como-instalar-laravel', $post->slug);

      // $this->assertSame(
      //   'como-instalar-laravel',
      //   $post->fresh()->slug
      // );
      //
      // $this->seeInDatabase('posts', [
      //   'slug' => 'como-instalar-laravel'
      // ]);


    }
}
