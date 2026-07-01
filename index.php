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

        function saisiChaine(string $message): string {
            return readline($message);
        }

        saisiChaine($message);

        function champObligatoire (string $value, string $message): bool{
            if (empty($value)) {
                echo $message ;
                return false;
            }
                return true;
        }

        function saisiChampobligatoireEtUnique(array $categories, string $mesSaisie, string $mesError, string $key): string{
            $valueIsValid = true;

            do {
                $value = saisieChaine($mesSaisie);
                $valueIsValid = champObligatoire($value,$mesError);
                if($valueIsValid){     
                $valueIsValid = rechercheCategorieParCle($categories,$key,$value);
        }
            } while (!valueIsValid);

            return $value;
        }


        function enregistrerCategorie(): void{
                global $categories;
                $code = saisieChampObligatoireEtUnique($categories,"Entrez le code :", "champs obligatoire : ", "code");
                $nom = saisieChampObligatoireEtUnique($categories,"Entrez le nom :", "champs obligatoire : ", "nom");

                $categorie  =   [
                        "code" => $code,
                        "nom" => $nom,
                        "produits" => []
                    ];

                $categories[] = $categorie;
            }

            function enregistrerCategorie();


?>