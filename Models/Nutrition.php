<?php
include_once __DIR__ . '/Product.php';


class Nutrition extends Product
{
    private $weigth;
    private $ingredients;

    public function __construct($img, $title, $animal, $price, $weigth, $ingredients)
    {
        parent::__construct($img, $title, $animal, $price);
        $this->setWeigth($weigth);
        $this->setIngredients($ingredients);
    }

    public function setWeigth($weigth)
    {
        if (!is_numeric($weigth) || $weigth <= 0) return false;
        $this->weigth = $weigth;
    }

    public function getWeigth()
    {
        return $this->weigth;
    }
    public function setIngredients($ingredients)
    {
        if (strlen($ingredients)) $this->ingredients = $ingredients;
    }
    public function getIngredients()
    {
        return $this->ingredients;
    }
}
