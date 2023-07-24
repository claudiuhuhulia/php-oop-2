<?php
include_once __DIR__ . '/Product.php';

class Game extends Product
{
    private $characteristics;
    private $dimension;

    public function __construct($img, $title, $animal, $price)
    {
        parent::__construct($img, $title, $animal, $price);
    }
    public function setDimension($dimension)
    {
        if (strlen($dimension)) $this->dimension = $dimension;
    }
    public function getDimension()
    {
        return $this->dimension;
    }
    public function setCharacteristics($characteristics)
    {
        if (strlen($characteristics)) $this->characteristics = $characteristics;
    }
    public function getCharacteristics()
    {
        return $this->characteristics;
    }
}
