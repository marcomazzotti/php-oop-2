<?php
require_once __DIR__ . "/Models/category.php";
require_once __DIR__ . "/Models/product.php";
require_once __DIR__ . "/Models/food.php";
require_once __DIR__ . "/Models/toy.php";

$dog_category = new category("cane", "fa-solid fa-dog");
// var_dump($dog_category);

$cat_category = new category("gatto", "fa-solid fa-cat");
// var_dump($cat_category);

$product1 = new product("", "Prodotto 1", "30", "lorem", $dog_category);
// var_dump($product1);

$product2 = new product("", "Prodotto 2", "15", "lorem", $cat_category);
// var_dump($product2);

$dog_food = new food("https://www.robinsonpetshop.it/25288-large_default/brit-premium-adult-large-per-cani.jpg", "Crocchette", 44.00, "Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem", $dog_category);
// var_dump($dog_food);

$cat_food = new food("https://www.robinsonpetshop.it/25279-large_default/brit-premium-sterilized-salmone-per-gatti.jpg", "Crocchette", 3.90, "Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem", $cat_category);
// var_dump($cat_food);

$dog_toy = new toy("https://www.robinsonpetshop.it/22063-large_default/united-pets-dan-blues-in-lattice-giallo.jpg", "Papera", 12.20, "Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem", $dog_category, "Lattice", "Giallo");
// var_dump($dog_toy);

$cat_toy = new toy("https://www.robinsonpetshop.it/24666-large_default/farm-company-tiragraffi-acero-fluffy-cannella.jpg", "Tiragraffi", 31.90, "Lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem", $cat_category, "Pelliccia sintetica", "marrone");
// var_dump($cat_toy);

$products = [
  $dog_food,
  $cat_food,
  $dog_toy,
  $cat_toy
];
