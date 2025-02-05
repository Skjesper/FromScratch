<?php

declare(strict_types=1);

namespace App;

use App\Product;


class Cart {
    
    private array $items = [];

    public function addItems (Product $product, int $quantity = 1): void {
        
    }

}