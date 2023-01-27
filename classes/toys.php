<?php
require_once __DIR__ . "/product.php";

class toys extends product {
    private $games;
    private $size;

    public function __construct(string $name, string $image, float $price, category $category, string $games, string $size)
    {
        parent::__construct($name, $image, $price, $category);
        $this->games = $games;
        $this->size = $size;
    }

    public function getGames()
    {
       return $this->games;
    }

    public function getSize() {
        return $this->size;
    }
}