<?php

class category
{
  public $name;

  function __construct($_name)
  {
    $this->name = $_name;
  }
}

class dog extends category
{
  public function __construct($_name = "Cane")
  {
    $this->name = $_name;
  }
}

class cat extends category
{
  public function __construct($_name = "Gatto")
  {
    $this->name = $_name;
  }
}
