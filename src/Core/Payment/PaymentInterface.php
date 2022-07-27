<?php


namespace Core\Payment;

interface PaymentInterface
{

    public function createPlan(array $data): array;
    public function findClientById(string $id): ?object; //nesse caso devolve null ou object
    public function makePayment(array $data): bool;


}
