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
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function setUp(): void
    {
        parent::setUp();
    }

    public function test_index(): void
    {
        $post = Post::factory()->create();

        $response = $this->get(route('posts.index'));

        $response->assertStatus(200);

        $response->assertViewIs('posts.index');
        
        $response->assertViewHas('posts');
        
    }

    public function test_show(): void
    {
        $post = Post::factory()->create();

        $response = $this->get(route('posts.show', ['id' => $post->id]));

        $response->assertOk();

        $response->assertViewHas('post');

        $response->assertSee($post->title);
    }

    public function test_show_method_will_handle_non_existing_post(): void
    {
        $response = $this->get(route('posts.show', ['id' => 1234]));

        $response->assertStatus(404);
    }
}
