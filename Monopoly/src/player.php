<?php
    class Player {
      public $name;
      public $token;

      public function __construct($player)
      {
          $this->player = $player;
      }
    }

    $player = new Player("Maxime", "hat");
    $player2 = new Player("Julien");