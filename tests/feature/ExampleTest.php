<?php

class ExampleTest extends FeatureTestCase
{

    /**
     * A basic functional test example.
     *
     * @return void
     */
    function test_basic_example()
    {
        $name = 'Nico';

        $user = factory(\App\User::class)->create([
          'name' => $name,
        ]);

        $this->actingAs($user, 'api')
             ->visit('api/user')
             ->see($name);
    }
}
