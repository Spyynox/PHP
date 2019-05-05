<?php

    class Location 
    {
      private $name;
      private $price = false;
      private $color;
      private $special = null;

      public function __construct($name, $color, $price = 0, $special = null)
      {
        $this->name = $name;
        $this->price = $price;
        $this->color = $color;
        $this->special = $special;
      }
    }
    