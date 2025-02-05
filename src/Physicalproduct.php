<?php

declare(strict_types=1);

namespace App;

use App\Product;



class PhysicalProduct extends Product {
    
    public function __construct(
        int $articleID, 
        string $name, 
        float $price,
        float $width,
        float $height,
        float $depth,
        float $weight) {
        
        parent::__construct($articleID, $name, $price);
        
    }
}
 