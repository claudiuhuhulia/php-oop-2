<?php

class Product
{
    protected $img;
    protected $title;
    protected $animal;
    protected $price;

    public function __construct($img, $title, $animal, $price)
    {
        $this->setImg($img);
        $this->setTitle($title);
        $this->setAnimal($animal);
        $this->setPrice($price);
    }

    public function setImg($img)
    {
        if (strlen($img)) $this->img = $img;
    }
    public function getImg()
    {
        return $this->img;
    }
    public function setTitle($title)
    {
        if (strlen($title)) $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setAnimal($animal)
    {
        if (strlen($animal)) $this->animal = $animal;
    }
    public function getAnimal()
    {
        return $this->animal;
    }
    public function setPrice($price)
    {
        if (!is_numeric($price) || $price <= 0) return false;
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
}
