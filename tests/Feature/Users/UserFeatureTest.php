<?php

namespace Tests\Feature\Users;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserFeatureTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_store_user()
    {
        $response =  $this->post('api/users', ['name' => 'test', 'email' => 'test@gm.com', 'password' => '12345678'])->decodeResponseJson();
        dd($response);
    }
}
