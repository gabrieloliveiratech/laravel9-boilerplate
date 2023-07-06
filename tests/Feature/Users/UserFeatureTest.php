<?php

namespace Tests\Feature\Users;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\User\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\TestCase;

class UserFeatureTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test retrieve all users
     * 
     * @return void
     */
    public function test_index_users()
    {
        $user = User::factory()->create(['name' => 'test']);
        User::factory()->create(['name' => 'xpto']);
        $this->get('api/users')->assertStatus(Response::HTTP_OK)->assertJsonFragment(['name' => $user->name])->assertJsonCount(2);
    }

    /**
     * Test retrieve specific user
     * 
     * @return void
     */
    public function test_show_user()
    {
        $user = User::factory()->create(['name' => 'test']);
        $this->get('api/users/' . $user->id)->assertStatus(Response::HTTP_OK)->assertJsonFragment(['name' => $user->name]);
    }

    /**
     * Test store an user
     *
     * @return void
     */
    public function test_store_user()
    {
        $this->post('api/users', ['name' => 'test', 'email' => 'test@gm.com', 'password' => '12345678'])
            ->assertStatus(Response::HTTP_CREATED)
            ->assertJsonFragment(['name' => 'test']);
    }

    /**
     * Test update a user
     * 
     * @return void
     */
    public function test_update_user()
    {
        $user = User::factory()->create(['name' => 'test']);
        $this->put('api/users/' . $user->id, ['name' => 'xpto'])->assertStatus(Response::HTTP_OK)->assertJsonFragment(['name' => 'xpto']);
    }

    /**
     * Test delete a user
     * 
     * @return void
     */
    public function test_delete_user()
    {
        $user = User::factory()->create(['name' => 'test']);
        $this->delete('api/users/' . $user->id)->assertStatus(Response::HTTP_OK)->assertJsonFragment(['message' => 'Success']);
    }
}
