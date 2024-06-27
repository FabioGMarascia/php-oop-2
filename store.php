<?php
include __DIR__ . "/models/Category.php";
include __DIR__ . "/models/Product.php";
include __DIR__ . "/models/Toy.php";
include __DIR__ . "/models/Food.php";
include __DIR__ . "/models/Kennel.php";
include __DIR__ . "/models/Customer.php";

$dogCategory = new Category("CATEGORY: DOG", "Dog's Products", "Dog's Category");
$catCategory = new Category("CATEGORY: CAT", "Cat's Products", "Cat's Category");

$products = [
    new Food(
        "NAME: Meat",
        "PRICE: " . 10 . "$",
        $dogCategory,
        "./img/dog_food.jpg",
        "FOOD WIGTH: 200g",
    ),
    new Toy(
        "NAME: Stick",
        "PRICE: " . 15 . "$",
        $dogCategory,
        "./img/dog_stick.jpg",
        "TOY MATERIAL: Rubber"
    ),
    new Kennel(
        "NAME: Kennel",
        "PRICE: " . 30 . "$",
        $dogCategory,
        "./img/dog_kennel.jpg",
        "KENNEL DIMENSION: 15x40x30"

    ),
    new Food(
        "NAME: Croquettes",
        "PRICE: " . 8 . "$",
        $catCategory,
        "./img/cat_food.jpg",
        "FOOD WIGTH: 50g"
    ),
    new Toy(
        "NAME: Ball",
        "PRICE: " . 12 . "$",
        $catCategory,
        "./img/cat_ball.jpg",
        "TOY MATERIAL: Plastic"
    ),
    new Kennel(
        "NAME: Kennel",
        "PRICE: " . 28 . "$",
        $catCategory,
        "./img/cat_kennel.jpg",
        "KENNEL DIMENSION: 10x35x25"
    ),
];

$customer = new Customer("Fabio", "Marascia");
