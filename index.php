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

foreach ($categories as $categorie) {
    if (count($categorie["produits"]) == 0) {
        echo $categorie["nom"];
    }
}

$codeIsValid = true;

do {
    $code = readline ("Entrer le code : ");
    if (empty($code)) {
        echo "Le code est obligatoire ";
        $codeIsValid = false;


    } else {
        foreach ($categories as $categorie ) {
            if (($categorie["code"]) === $code) {
                $codeIsValid = false; 
                echo "le code exitse deja.";
            }
        }
    }
} while (!$codeIsValid);

$nomIsValid = true;

do {
     $code = readline ("Entrer le nom : ");
    if (empty($nom)) {
        echo "Le nom est obligatoire ";
        $nomIsValid = false;


    } else {
        foreach ($categories as $categorie ) {
            if (($categorie["nom"]) === $nom) {
                $nomIsValid = false; 
                echo "le nom exitse deja.";
            }
        }
    }
    
} while (!$nomIsValid);

$categorie = [ 
                "code" => $code,
                "nom" =>  $nom,
                "produits" => []
            ];

                $categories[] = $categorie;



?>