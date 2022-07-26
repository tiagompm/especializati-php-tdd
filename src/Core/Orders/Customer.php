<?php

namespace Core\Orders;

class Customer
{
    public function __construct(
        protected string $name,
    ) {
    }

    /**
     * @param string $name
     *
     * @return [type]
     */
    public function changeName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
