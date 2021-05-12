<?php

namespace App\Models;

class TestModel
{
  private $text = "hellow world";

  public function getHellow() {
    return $this->text;
  }
}