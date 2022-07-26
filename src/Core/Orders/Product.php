<?php

namespace Core\Orders;

class Product
{
    public function __construct(
        protected string $id,
        protected string $name,
        protected float $price,
        protected int $quantity
    ) {
    }



    public function add(Product $product):array
    {
    }


    public function getId():string
    {
        return $this->id;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function getPrice():float
    {
        return $this->price;
    }

    public function getQuantity():int
    {
        return $this->quantity;
    }

    public function total():float
    {
        return $this->price * $this->quantity;
    }

    public function totalWithTax(float $tax):float
    {
        return $this->total() * 1.1;
    }
}
