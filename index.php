<link rel="stylesheet" href="assets/css/style.css">

<?php

    $personnages = [
        [
            "name" => "Gon Freaks",
            "age" => "10 ans",
            "birth" => "1987",
            "height" => "1m30",
            "weight" => "55 kgs",
            "imgSrc" => "assets/img/Gon_Portrait.webp",
            "ImgAlt" => "Portrait de Gon Freaks",
        ],
        [
            "name" => "Kirua",
            "age" => "10 ans",
            "birth" => "1987",
            "height" => "1m30",
            "weight" => "55 kgs",
            "imgSrc" => "assets/img/Kirua_Portrait.webp",
            "ImgAlt" => "Portrait de Kirua",
        ],
        [
            "name" => "Leorio Paradinaito",
            "age" => "30 ans",
            "birth" => "1967",
            "height" => "1m75",
            "weight" => "75 kgs",
            "imgSrc" => "assets/img/Leorio_Portrait.webp",
            "ImgAlt" => "Portrait de Leorio",
        ],
        [
            "name" => "Kurapika",
            "age" => "25 ans",
            "birth" => "1982",
            "height" => "1m60",
            "weight" => "70 kgs",
            "imgSrc" => "assets/img/Kurapika_Portrait.webp",
            "ImgAlt" => "Portrait de Kurapika",            
        ],
        [
            "name" => "Hisoka",
            "age" => "33 ans",
            "birth" => "1925",
            "height" => "1m70",
            "weight" => "80 kgs",
            "imgSrc" => "assets/img/Hisoka_Portrait.webp",
            "ImgAlt" => "Portrait d'Hisoka",
        ],
    ];

    foreach ($personnages as $personnage) {
?>  
    <article class="Personnages">
        <h3> Nom: <?= $personnage["name"]?></h3>
        <img src="<?= $personnage["imgSrc"]?>" alt="<?= $personnage["ImgAlt"] ?>" ?>
        <p> 
            <strong>Age:</strong> <?= $personnage["age"] ?>
        </p>
        <p>
            <strong>Birth:</strong> <?= $personnage["birth"] ?>
        </p>
        <p>
            <strong>Height:</strong> <?= $personnage["height"] ?>
        </p>
        <p>
            <strong>Weight:</strong> <?= $personnage["weight"] ?>
        </p>
    </article>
<?php
    }

?>