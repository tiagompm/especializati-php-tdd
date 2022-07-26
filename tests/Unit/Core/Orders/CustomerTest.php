<?php

namespace Tests\Core\Orders;

use Core\Orders\Customer;
use PHPUnit\Framework\TestCase;

class CustomersTest extends TestCase
{
    /**
     * @return [type]
     */
    public function test_attributes()
    {
        $customer = new Customer(
            name:"Tiago",
        );
        
        $this->assertEquals('Tiago', $customer->getName());

        $customer->changeName(name: 'Jose');
        $customer->getName();

        $this->assertTrue(true);
    }
}
