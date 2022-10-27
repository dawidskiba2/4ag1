<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operatory</title>
</head>
<style>
    body{
        color: green;
        background-color: black;
    }
</style>
<body>
    Skrypt czwarty to jest.<br>
    <?php 
        $dni = array('pon' =>'Poniedziałek',
        'wt' => 'Wtorek',
        'sr' => 'Środa',
        'czw' => 'Czwartek',
        'pt' => 'Piątek',
        'sob' => 'Sobota',
        'ndz' => 'Niedziela');
        echo "Dni jest: ".count($dni)."<br>";

        $x=5;
        $y=5.00;
        if ($x === $y) {
            echo 'Równe (typ też).<br>';
        }
        if ($x == $y) {
            echo 'Wartości równe.';
        }


        
    ?>


    <?php
        $dni[0]='poniedziałek';
        $dni[1]='wtorek';
        $dni[2]='środa';
        $dni[3]='czwartek';
        $dni[4]='piątek';
        $dni[5]='sobota';
        $dni[6]='niedziela';
    ?>
    <hr>
    <?php
        $x=10;
        $text = "Nieparzysta";
        if ($x%2 == 0) $text = "Parzysta";
        echo "Liczba jest: $text";
    ?>
    <hr>
    <?php

        $color = "blue";
        switch ($color) {
            case 'red': 
                echo 'czerwony';
                break;
            case 'green': 
                echo 'zielony';
                break;
            case 'blue': 
                echo 'niebieski';
                break;
            default: 
                echo "Niepoprawny kolor";
        }
    ?>
    <hr>
    <?php
        for($i = 2; $i <11; $i+=2) {
            echo "$i<br>";
        }
        echo "<hr>";
        for($i = 1; $i < 11; $i++) {
            if ($i%2) continue;
            echo "$i<br>";
        }
    ?>
    <hr>
    <?php
        function average($numbers) {
            $summary = 0;
            foreach($numbers as $number) {
                $summary += $number;
            }
            return $summary / count($numbers);
        }

        echo "Średnia to:".average(array(5,7));
    ?>
    <hr>
    <?php
        unset($dni[3]);
        for($i=0; $i<7; $i++)
            echo ($dni[$i] ?? '--brak--'). '<br>';
    ?>
</body>
</html>