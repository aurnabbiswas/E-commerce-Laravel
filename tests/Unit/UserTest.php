<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_register_form()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
}