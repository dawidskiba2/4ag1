<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 4;
        function dzien($n){
            $dni = array('poniedzialek', 'wtorek' 'sroda', 'czwartek', 'piatek', 'sobota', 'niedziela');

            if($n>0 && $n<8){
                return $dni[$n-1];
            }
            else
                return 'błąd';
        }
        echo dzien($x).'<br>';
        echo dzien(2).'<br>';

        $dni = array('poniedzialek', 'wtorek' 'sroda', 'czwartek', 'piatek', 'sobota', 'niedziela');
        function nrdnia($tab, $dzien){
            for($i = 0; $i<sizeof($tab); $i++){
                if($tab[$i] == $dzien)
                    return $i+1;
            return -1;
        }
        
    ?>
</body>
</html>