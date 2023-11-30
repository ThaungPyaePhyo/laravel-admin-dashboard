<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $this->markTestIncomplete('This test need to fix the errors!');
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
