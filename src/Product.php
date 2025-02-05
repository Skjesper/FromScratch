<?php

declare(strict_types=1);

namespace App;

use App\Exceptions\NegativePriceException;

class Product
{
    public function __construct
    (
        private string $name, 
        private float $price) {

            if($price < 0) {
                throw new NegativePriceException('Price is under 0');
            }  
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function setprice(): string {
        return $this->name;
    }
}