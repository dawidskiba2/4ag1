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

$uoh = array("haha","hahaha","hahahaha");


function maximin($tab)
{
    $krtk= $tab[0];
    $dlg= $tab[0];
    for($i=0;$i<count($tab);$i++){
        if(strlen($krtk)>strlen($tab[$i]))
        $krtk=$tab[$i];
        if(strlen($dlg)<strlen($tab[$i]))
        $dlg=$tab[$i];

        
    }
    return array("najdlusze"=>$dlg,"najkrotsze"=>$krtk);
}


print_r(maximin($uoh));




?>


</body>
</html>