<?php

namespace Tests\Unit;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_register()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    public function test_addToCart()
    {
        $response = $this->get('/addToCart');
        $response->assertStatus(404);
    }


    public function test_removeCart()
    {
       $response = $this->get('/removeCart');
       $response->assertStatus(404);
 
    }
 
    public function test_search()
    {
       $response = $this->get('/search');
       $response->assertStatus(200);
 
    }
 
    public function test_checkout()
    {
       $response = $this->get('/checkout');
       $response->assertStatus(404);
 
    }

    public function test_remove_from_cart()
    {
       $response = $this->get('/remove_from_cart');
       $response->assertStatus(404);
 
    }

    public function test_cartList()
    {
       $response = $this->get('/cartList');
       $response->assertStatus(404);
 
    }

    public function test_orderNow()
    {
       $response = $this->get('/orderNow');
       $response->assertStatus(404);
 
    }

    public function test_myOrders()
    {
       $response = $this->get('/myOrders');
       $response->assertStatus(404);
 
    }


 
}