<?php

class Food extends Product
{
    public function __construct(public $name, public $price, public Category $category, public $foodWeigth)
    {
    }
}
