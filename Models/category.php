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
  public function __construct()
  {
    parent::__construct("Cane");
  }
}

class cat extends category
{
  public function __construct()
  {
    parent::__construct("Gatto");
  }
}
