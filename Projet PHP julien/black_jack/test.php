<?php
     $carte = array(1, 2, 3, 4, 5, 6, 7, 8, 9, "Dame", "Roi", "Valet", "Pique");

class BlackJack {
    var $joueurs = "";
    var $carte = array(1, 2, 3, 4, 5, 6, 7, 8, 9, "Dame", "Roi", "Valet", "Pique");
    var $Dame = 10;
    var $Roi = 10;
    var $Valet = 10;
    var $Pique = 10;

    function __construct($joueurs, $carte){
        $this->joueurs = $joueurs;
        $this->carte = $carte;
    }

    static function hasard() {
        $personnage = new Personnage("Doe", 20, 250);
        return $personnage;
    }

    function lancement($)
}

$joueurs1 = new BlackJack("Maxime", $carte[array_rand($carte)]);
$joueurs2 = new BlackJack("Julien", $carte[array_rand($carte)]);