<?php

    class Plateau {
        private $location = [];
        
        public function __construct($location)
        {
            $cases = 
            [
                  ["name" => "Départ", "color" => "no", "special" => "start"],
                  ["name" => "Boulevard de Belleville", "color" => "pink", "price" => 6],
                  ["name" => "Caisse de Communauté", "color" => "no", "special" => "community"],
                  ["name" => "Rue Lecourbe", "color" => "pink", "price" => 6],
                  ["name" => "Impots sur le revenue", "color" => "no", "special" => "revenue_tax"],
                  ["name" => "Gare Montparnasse", "color" => "black", "price" => 20],
                  ["name" => "Rue de Vaugirard", "color" => "blue", "price" => 10],
                  ["name" => "Chance", "color" => "no", "special" => "luck"],
                  ["name" => "Rue de Courcelles", "color" => "blue", "price" => 10],
                  ["name" => "Avenue de la République", "color" => "blue", "price" => 12],
                  ["name" => "Prison", "color" => "no", "special" => "jail"],
                  ["name" => "Boulevard de la Villette", "color" => "violet", "price" => 14],
                  ["name" => "Electricité", "color" => "white", "price" => 15],
                  ["name" => "Avenue de Neuilly", "color" => "violet", "price" => 14],
                  ["name" => "Rue de Paradis", "color" => "violet", "price" => 16],
                  ["name" => "Gare de Lyon", "color" => "black", "price" => 20],
                  ["name" => "Avenue Mozart", "color" => "orange", "price" => 18],
                  ["name" => "Caisse de Communauté", "color" => "no", "special" => "community"],
                  ["name" => "Boulevard Saint-Michel", "color" => "orange", "price" => 18],
                  ["name" => "Place Pigalle", "color" => "orange", "price" => 20],
                  ["name" => "Parc Gratuit", "color" => "no", "special" => "park"],
                  ["name" => "Avenue Matignon", "color" => "red", "price" => 22],
                  ["name" => "Chance", "color" => "no", "special" => "luck"],
                  ["name" => "Boulevard Malsherbe", "color" => "red", "price" => 22],
                  ["name" => "Avenue Henri-Martin", "color" => "red", "price" => 24],
                  ["name" => "Gare du Nord", "color" => "black", "price" => 20],
                  ["name" => "Faubourg Saint-Honoré", "color" => "yellow", "price" => 26],
                  ["name" => "Place de la Bourse", "color" => "yellow", "price" => 26],
                  ["name" => "Compagnie des Eaux", "color" => "white", "price" => 15],
                  ["name" => "Rue La Fayette", "color" => "yellow", "price" => 28],
                  ["name" => "Allez en Prison", "color" => "no", "special" => "go_to_jail"],
                  ["name" => "Avenue de Breteuil", "color" => "green", "price" => 30],
                  ["name" => "Avenue Foch", "color" => "green", "price" => 30],
                  ["name" => "Caisse de Communauté", "color" => "no", "special" => "community"],
                  ["name" => "Boulevard des Capucines", "color" => "green", "price" => 32],
                  ["name" => "Gare Saint-Lazare", "color" => "black", "price" => 20],
                  ["name" => "Chance", "color" => "no", "special" => "luck"],
                  ["name" => "Avenue des Champs-Elysées", "color" => "navy", "price" => 35],
                  ["name" => "Luxe", "color" => "no", "special" => "lux_tax"],
                  ["name" => "Rue de la Paix", "color" => "navy", "price" => 40],
                ];

                foreach ($cases as $case) {
                    $this->location[] = new Location(
                        $case["name"],
                        $case["color"],
                        $case["price"] ?? false,
                        $case["special"] ?? null
                    );
                }
        }

        
    }