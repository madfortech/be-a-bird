<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function it_can_create_a_post()
    {
        $data = [
            'title' => 'Test Post',
            'description' => 'This is a test post description.'
        ];

        $response = $this->post('/posts', $data);

        $response->assertStatus(201); // Assuming you want to return 201 for successful creation
        $this->assertDatabaseHas('posts', $data);
    }
}
