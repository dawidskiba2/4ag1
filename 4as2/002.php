<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .pola{width:100px;}
    </style>
</head>
<body>
<?php
        $nr=isset($_GET['numer']) ? $_GET['numer'] : 1;
        $dz=isset($_GET['nazwa']) ? $_GET['nazwa'] : 'poniedzialek';
        $x = 3;
        function dzien($n){
            $dni = array('poniedzialek', 'wtorek' 'sroda', 'czwartek', 'piatek', 'sobota', 'niedziela');

            //if($n>0 && $n<8){
            //return $dni[$n-1];
            //else
            //return 'błąd';'
            return ($n>0 && $n<8) ? dni[$n-1]: 'blad';
        }
        echo dzien($x).'<br>';
        echo dzien(2).'<br>';
        echo dzien(24).'<br>';

        $dni = array('poniedzialek', 'wtorek' 'sroda', 'czwartek', 'piatek', 'sobota', 'niedziela');

        function nrdnia($tab, $dzien){
            for($i = 0; $i<sizeof($tab); $i++){
                if($tab[$i] == $dzien)
                    return $i+1;
                return -1;
                }
            }
        }

        function nrdnia2($tab, $dzien){
            $w=array_search($dzien,$tab);
            return $w ? $w : -1;


        }

        $nr=nrdnia($dni,$dzien).'<br>'
        if($a>0) echo "Numer dnia $a";
        else
            echo "Nie ma takiego dnia";

        ?>
        <form action="002.php" method="get">
            <input type="number" name="number" class="pola" value="1"><br>
            <input type="text" name="nazwa" id="nazwa" class="pola" value="poniedzialek"><br>
            <input type="sumbit">
        </form>
</body>
</html>