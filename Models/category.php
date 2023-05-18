<?php

class category
{
  public $name;
  public $icon;

  function __construct($_name, $_icon)
  {
    $this->name = $_name;
    $this->icon = $_icon;
  }
}
