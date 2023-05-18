<?php

require_once __DIR__ . "/category.php";
class product
{
  public $img;
  public $name;
  public $price;
  public $description;
  public $category;


  function __construct($_img, $_name, $_price, $_description, category $_category)
  {
    $this->img = $_img;
    $this->name = $_name;
    $this->price = $_price;
    $this->description = $_description;
    $this->category = $_category;
  }

  // public function checkPrice($price)
  // {
  //   if ($price <= "0") {
  //     throw new Exception("Prezzo non valido");
  //   } else {
  //     $this->price = $price;
  //   }
  // }
}
