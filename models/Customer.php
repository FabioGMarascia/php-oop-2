<?php
class Customer
{

    public function __construct(public $name, public $surname, public $cart = [])
    {
    }

    public function addToCart($product)
    {
        $this->cart[] = $product;
    }

    public function getCart()
    {
        return $this->cart;
    }
}
