<?php

declare(strict_types=1);

namespace App\Product;

class Product
{
    private array $products = [];
    public function  __construct(int $articleID, string $name, float $price) {
        
        $this->products[] = [
            'articleID' => $articleID,
            'name' => $name,
            'price' => $price,
        ];

    }
        public function getProducts(): array 
        {
            return $this->products;
        }
}