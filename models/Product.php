<?php

class Product
{
    public function __construct(public $name, public $price, public Category $category)
    {
    }
}
