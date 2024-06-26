<?php

class Kennel extends Product
{
    public function __construct(public $name, public $price, public Category $category, public $img, public $kennelDimension)
    {
    }
}
