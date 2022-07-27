<?php

namespace Tests\Core\Payment;

use Core\Payment\PaymentController;
use Core\Payment\PaymentInterface;
use Mockery;
use PHPUnit\Framework\TestCase;
use stdClass;

class PaymentUnitTest extends TestCase 
{
    public function test_payment()
    {

        $mockPayment = Mockery::mock(stdClass::class, PaymentInterface::class);
        $mockPayment->shouldReceive('makePayment')
                    ->times(1)//once()
                    ->andReturn(true);

        // $mockPayment->shouldReceive('createPlan')->andReturn(true);
                    

        $payment = new PaymentController($mockPayment);

        $response = $payment->execute();

        $this->assertTrue($response);



    }



    protected function teardown(): void {
        Mockery::close();
        parent::tearDown();
    }
}