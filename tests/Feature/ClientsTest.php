<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClientsTest extends TestCase
{
    /**
     * Test /clients index.
     *
     * @return void
     */
    public function test_getIndex()
    {
        $response = $this->get("/clients");
        $response->assertStatus(200);
    }
}
