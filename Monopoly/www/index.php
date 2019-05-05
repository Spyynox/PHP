<?php
require_once("../src/Dice.php");
require_once("../src/Game.php");
require_once("../src/location.php");
require_once("../src/player.php");

if (!isset($_SESSION['results'])) 
    $_SESSION['results'] = [
        "d12" => [],
        "2d6" => [],
    ]
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Monopoly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    Dé 6 1:
    <?php
        $dice1 = new Dice(6);
        $result1 = $dice1->roll();
        echo $result1;
    ?>
    <br>
    
    Dé 6 2:
    <?php
        $dice2 = new Dice(6);
        $result2 = $dice2->roll();
        echo $result2;
    ?>
    <br>
    
    Total D1 + D2 :
    <?php
        $result2d6 = $result1 - $result2;
        echo $result2d6
    ?>
    <br>
    
    Dé 12:
    <?php
        $dice12 = new Dice(12);
        $result12 = $dice2->roll();
        echo $result12;
    ?>
    <br>
    
    <?php
        $board = new Game();
        var_dump($board);
    ?>
</body>
</html>