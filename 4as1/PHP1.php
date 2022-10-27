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
$n=2;
function dzien($n){
    $dni=['Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota', 'Niedziela'];
    if($n>0 || $n<8)
        return $dni[$n-1];
    else
        return 'Błąd';
}

function nrdnia($dni, $dzien){
    $dni[1]="abcd";
    for($i=0;$i<count($dni);$i++)
    if($dni[$i]==$dzien)
    return $i+1;
    return -1;
}

 $dni=['Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota', 'Niedziela'];
 echo dzien ($n). '<br>';
 echo nrdnia($dni, 'Czwartek');
 var_dump($dni);
echo'</pre>';
?>
</body>
</html>