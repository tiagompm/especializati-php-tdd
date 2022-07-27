<?php

namespace Tests\Core\Payment;

use Core\Payment\PaymentController;
use Core\Payment\PaymentInterface;
use Mockery;
use PHPUnit\Framework\TestCase;
use stdClass;

class PaymentUnitTest extends TestCase 
{

    // utilizada para configurar dados padroes utilizados em todos os testes
    // protected function setUp(): void
    // {
        
    // }

    public function test_payment()
    {
        //arrange
        $mockPayment = Mockery::mock(stdClass::class, PaymentInterface::class);
        $mockPayment->shouldReceive('makePayment')
                    ->times(1)//once()
                    ->andReturn(true);

        // $mockPayment->shouldReceive('createPlan')->andReturn(true);
        $payment = new PaymentController($mockPayment);

        //action
        $response = $payment->execute();

        //assert
        $this->assertTrue($response);



    }



    protected function teardown(): void {
        Mockery::close();
        parent::tearDown();
    }
}