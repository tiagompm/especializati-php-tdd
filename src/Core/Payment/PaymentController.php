<?php


namespace Core\Payment;

class PaymentController
{
    private $repository;
    
    public function __construct(PaymentInterface $repository)
    {
        $this->repository = $repository;    
    }
}
