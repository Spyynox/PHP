<?php
// $input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
// $rand_keys = array_rand($input, 2);
// echo $input[$rand_keys[0]] . "\n" . "<br>";

class Monde {
    var $personnages = [];

    static $instance;
    
    static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new Monde();
        } 
        else {
            return self::$instance;
        }
    }

    function ajouterPersonnage($personnage) {
        // $this
        // self::STATUS_DIE
    }
} 

$monde = Monde::getInstance();

    class Existence {
        var $vie = 0;
        var $force = 0;

        function __construct($vie, $force){
            $this->vie = $vie;
            $this->force = $force;
        }

        function attack($existence){
            $existence->vie = $existence->vie - $this->force;
        }
    }

    class Personnage extends Existence {
        var $pseudo = "";
        var $vie = 0;
        var $force = 0;
        var $heal = 750;
        function __construct($pseudo, $vie, $force){
            parent::__construct($vie, $force);
            $this->pseudo = $pseudo;
        }

        static function hasard() {
            $personnage = new Personnage("Doe", 20, 250);
            return $personnage;
        }
    

    // class Monstre extends Existence {
    //     var $nom = "";
    //     function __construct($nom, $vie, $force){
    //         parent::__construct($vie, $force);
    //         $this->nom = $nom;
    //     }

    //     function attackmonster($monstre) {
    //         if ($monstre1 == "Dragon") {
    //             echo "fffj";
    //         }
    //     }
    // }

    // $monstre1 = new Monstre("Dragon", 300, 100);
    // $monstre2 = new Monstre("chien", 110, 10);

    // $monstre1->attackmonster($monstre2);




    // function __construct($pseudo, $vie, $force) {
    //     $this->pseudo = $pseudo;
    //     $this->vie = $vie;
    //     $this->force = $force;
    // }

    function attack($personnage) {
        
        while (true) {
           // if ($personnage->vie <= 0 || $this->vie <= 0) {
                
            
            $personnage->vie = $personnage->vie - $this->force;
            $personnage->vie = $personnage->vie - $this->force;
            $this->vie = $this->vie - $personnage->force;
            echo $this->pseudo . " a attaqué " . $personnage->pseudo . "<br />";
            echo "La vie de " . $personnage->pseudo . " est de " . $personnage->vie . "<br />". "<br />";
            echo $personnage->pseudo . " a attaqué " . $this->pseudo . "<br />";
            echo "La vie de " . $this->pseudo . " est de " . $this->vie . "<br />". "<br />";

            if ($personnage->vie <= 0 || $this->vie <= 0) {
                break 1;
            }

            //}
        }
        
        if ($personnage->vie <= 0 ) {
            echo $personnage->pseudo . " est mort". "<br>";
        }

        if ($this->vie <= 0 ) {
            echo $this->pseudo . " est mort". "<br>";
        }
        
        // for ($i=0; $i < ; $i++) { 
        //     if ($personnage->vie[i] !== 0) {
        //     $personnage->vie = $personnage->vie - $this->force;
        //     echo $this->pseudo . " a attaqué " . $personnage->pseudo . "<br>";
        //     echo "La vie de " . $personnage->pseudo . " est de " . $personnage->vie . "<br>";
        //     }
        // }

        // if ($personnage->vie !== 0) {
        //     $personnage->vie = $personnage->vie - $this->force;
        //     echo $this->pseudo . " a attaqué " . $personnage->pseudo . "<br>";
        //     echo "La vie de " . $personnage->pseudo . " est de " . $personnage->vie . "<br>";
        // }
        
        // if ($personnage->vie == 0) {
        //     echo $personnage->pseudo . " est mort";
        // }
    }

}
$personnage1 = new Personnage("Julien", 1200, 40);
$personnage2 = new Personnage("Doe", 200, 30);

$personnage1->attack($personnage2);
?>