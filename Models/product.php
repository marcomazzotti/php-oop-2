<?php
require_once __DIR__ . "/category.php";
class product
{
  public $img;
  public $name;
  public $description;
  public $price;
  public $category;

  function __construct($_img, $_name, $_description, $_price, $_category)
  {
    $this->img = $_img;
    $this->name = $_name;
    $this->description = $_description;
    $this->price = $_price;
    $this->category = $_category;
  }

  public function printInfo()
  {
    $print = "<h4> {$this->name} </h4>";
    $print .= '<img src="' . $this->img . '" alt="' . $this->name . '">';
    $print .= "<h6> {$this->description} </h6>";
    $print .= "<h5> {$this->price} </h5>";
    $print .= "<p> {$this->category->name} </p>";

    return $print;
  }
}
