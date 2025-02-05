<?php

declare(strict_types=1);

namespace App\http;

use App\http\Product;


class Cart {
    
    private array $items = [];

    public function addItems (Product $product, int $quantity = 1): void {
        
    }

}