<?php

namespace Tests\Core\Orders;

use PHPUnit\Framework\TestCase;
use Core\Orders\Cart;
use Core\Orders\Product;

class CartUnitTest extends TestCase
{
    /**
     * @return [type]
     */
    public function test_cart()
    {
        $cart = new Cart();
        $cart->add(product: new Product(id:1, name: 'Produto 1', price: 10, quantity:6));
        $cart->add(product: new Product(id:2, name: 'Produto 2', price: 3, quantity:18));



        $this->assertCount(2, $cart->getItems());
        $this->assertEquals(114, $cart->total());

    }



    public function test_cart_total() 
    {
        $cart = new Cart();
        $cart->add(product: new Product(id:'1', name: 'Produto 1', price: 10, quantity:6));
        $cart->add(product: new Product(id:'1', name: 'Produto 1', price: 10, quantity:10));
        $cart->add(product: new Product(id:'2', name: 'Produto 2', price: 3, quantity:18));

    
        $this->assertCount(2, $cart->getItems());
        $this->assertEquals(214, $cart->total());
    
    }


    public function test_cart_empty()
    {
        $cart = new Cart();
   
        $this->assertCount(0, $cart->getItems());
    }

}