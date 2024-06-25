<?php
include __DIR__ . "/models/Category.php";
include __DIR__ . "/models/Product.php";
include __DIR__ . "/models/Toy.php";
include __DIR__ . "/models/Food.php";
include __DIR__ . "/models/Kennel.php";

$dogCategory = new Category("CATEGORY: DOG", "Dog's Products", "Dog's Category");
$catCategory = new Category("CATEGORY: CAT", "Cat's Products", "Cat's Category");

$dogProducts = [
    new Food(
        "NAME: Meat",
        "PRICE: " . 10 . "$",
        $dogCategory,
        "FOOD WIGTH: 200g"
    ),
    new Toy(
        "NAME: Stick",
        "PRICE: " . 15 . "$",
        $dogCategory,
        "TOY MATERIAL: Rubber"
    ),
    new Kennel(
        "NAME: Kennel",
        "PRICE: " . 30 . "$",
        $dogCategory,
        "KENNEL DIMENSION: 15x40x30"
    ),
];

$catProducts = [
    new Food(
        "NAME: Croquettes",
        "PRICE: " . 8 . "$",
        $catCategory,
        "FOOD WIGTH: 50g"
    ),
    new Toy(
        "NAME: Ball",
        "PRICE: " . 12 . "$",
        $catCategory,
        "TOY MATERIAL: Plastic"
    ),
    new Kennel(
        "NAME: Kennel",
        "PRICE: " . 28 . "$",
        $catCategory,
        "KENNEL DIMENSION: 10x35x25"
    ),

];
