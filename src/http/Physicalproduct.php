<?php

declare(strict_types=1);

namespace App\http;

use App\http\Product;



class PhysicalProduct extends Product {
    
    private float $width;    // Only declare new properties
    private float $height;   // that aren't in the parent
    private float $depth;    // Product class
    private float $weight;

    public function __construct(
        int $articleID, 
        string $name, 
        float $price,
        float $width,
        float $height,
        float $depth,
        float $weight) {
        
        parent::__construct($articleID, $name, $price);
        
        $this->width = $width;     // Set the new properties
        $this->height = $height;
        $this->depth = $depth;
        $this->weight = $weight;
    }
}
 