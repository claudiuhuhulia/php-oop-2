<?php
include_once __DIR__ . '/Product.php';

class Thing extends Product
{
    public $material;
    public $dimension;

    public function __construct($img, $title, $animal, $price, $material, $dimension)
    {
        parent::__construct($img, $title, $animal, $price);
        $this->setMaterial($material);
        $this->setDimension($dimension);
    }

    public function setMaterial($material)
    {
        if (strlen($material)) $this->material = $material;
    }
    public function getMaterial()
    {
        return $this->material;
    }
    public function setDimension($dimension)
    {
        if (strlen($dimension)) $this->dimension = $dimension;
    }
    public function getDimension()
    {
        return $this->dimension;
    }
}
