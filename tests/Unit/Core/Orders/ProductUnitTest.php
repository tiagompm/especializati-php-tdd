<?php

namespace Tests\Core\Orders;

use Core\Orders\Product;
use Mockery;
use PHPUnit\Framework\TestCase;

class ProductUnitTest extends TestCase
{
    public function test_attributes()
    {
        $product = new Product(
            id: 1,
            name: "teste 1",
            price: 10, 
            quantity: 10,
        );


        $this->assertEquals(1, $product->getId());
        $this->assertEquals('teste 1', $product->getName());
        $this->assertEquals(10, $product->getPrice());
        $this->assertEquals(10, $product->getQuantity());

    }

    public function test_calc()
    {
        $product = new Product(
            id: 1,
            name: "Produto 1",
            price: 10.0,
            quantity: 5
        );

        $this->assertEquals(50, $product->total());
        $this->assertEquals(55, $product->totalWithTax(tax: 10));

        $this->assertTrue(true);
    }



    public function test_calc_with_tax()
    {
        $product = new Product(id: 1, name: "Produto 2", price: 100, quantity: 2);

        $this->assertEquals(220, $product->totalWithTax(tax: 10));
    }


    public function test_example_mock() 
    {
        $mockProduct = Mockery::mock(Product::class, [
            'id', 'name', 12, 1
        ]);
        $mockProduct->shouldReceive('getId')->andReturn('id');

        Mockery::close();

        $this->assertTrue(true);

    }
}
