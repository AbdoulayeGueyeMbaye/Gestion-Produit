<?php
$categories = [
            0 => [
                "code" => "C01",
                "nom" => "categorie1",
                "produits" => [
                    0 => [
                        "nom" => "lait",
                        "reference" => "ref1",
                        "prix" => 5000,
                        "quantite" => 5
                    ],
                    1 => [
                        "nom" => "pain",
                        "reference" => "ref2",
                        "prix" => 2000,
                        "quantite" => 3
                    ]
                ]
            ],
            1 => [
                "code" => "C02",
                "nom" => "categorie2",
                "produits" => []
               ]
        ];


        function afficherCategorieSansProduit(array $categories): void {

        foreach ($categories as $categorie ) {
            if (empty($categorie["produits"])) {
               echo $categorie["nom"];
            }
        }
        }

        afficherCategorieSansProduit($categories);





?>