<?php

require_once __DIR__ . "/product.php";

class toy extends product
{
  public $material;
  public $color;

  function __construct(
    $_img,
    $_name,
    $_price,
    $_description,
    category $_category,
    $_material,
    $_color
  ) {
    parent::__construct($_img, $_name, $_price, $_description, $_category);
    $this->material = $_material;
    $this->color = $_color;
  }
}
