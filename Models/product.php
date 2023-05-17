<?php

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
}
