<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php

    $note = 16;
    $rendu = false;
    $triche = true; 
    
    if ($rendu == false) {
        echo "Votre nous n'avez pas rendu de devoir";
    }  else if ($rendu == true && $note == 0) {
        echo "Aucun effort";
    }   else if ($rendu == true && $note == 5) {
        echo "A essayer";
    }   else if ($rendu == true && $note == 7) {
        echo "C'est mieux que 5";
    }   else if ($rendu == true && $note == 10) {
        echo "Pile poil la moyenne";
    }   else if ($rendu == true && $note == 12) {
        echo "Assez bien";
    }   else if ($rendu == true && $note == 14) {
        echo "Bien";
    }   else if ($rendu == true && $note == 16) {
        echo "Très bien";
    }   else if ($triche == true && $note == 16) {
        echo "Triche";
    }   else if ($rendu == true && $note == 20) {
        echo "Excellent";
    }   else if ($triche == false && $note == 20) {
        echo "Triche excellente";
    }   
    ?>
</body>
</html>
