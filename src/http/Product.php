<?php

declare(strict_types=1);

namespace App\http;

class Product
{
    private int $articleID;
    private string $name;
    private float $price;

    public function __construct(int $articleID, string $name, float $price) {
        $this->articleID = $articleID;
        $this->name = $name;
        $this->price = $price;
    }

    public function getArticleID(): int {
        return $this->articleID;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getPrice(): float {
        return $this->price;
    }
}