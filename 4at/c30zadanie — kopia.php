<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        [type="text"]
        {
            width: 100px;
        }

        tr, td, th{
            border: solid 1px black;
        }

        #kwota
        {
            text-align: right;
        }

        .blad
        {
            border: solid 2px red;
        }
    </style>
</head>
<body>
    
    <?php

        function sprawdz($kw)
        {
            $kw = str_replace(',', '.', $kw);
            
            if(is_numeric($kw) && $kw>=1 && $kw<=2500)
              return $kw;
            else
              return 0;
        }



        $nazwisko = $_GET['nazwisko'] ;
        $kwota = $_GET['kwota'] ;
        $kw2 = sprawdz($kwota);

        

        if(!$kw2)
        {
            $klasa = 'class="blad"';
        }
        else
        {
            $klasa = '';
            $kwota = $kw2;
        }
        // $klasa = $kw2 ? '' : 'class="blad"';

    ?>


    <form method="get" action="c30zadanie-kopia.php">
        <input type="text" id="nazwisko" name="nazwisko" value="<?=$nazwisko?>">
        <input type="text" id="kwota" name="kwota" value="<?=$kwota?>" <?=$klasa?>>
        <input type="submit" value="Wyślij">
    </form>


    <?php
    if($kw2)
        echo $kw2 ? '' : 'Błąd liczby<br>';
    else
    echo "<table
    
   
  
    >
    <tr>
        <td>$nazwisko/td>
        <td>$kwota</td>
    </tr>
    </table>";
    ?>

   
    
</body>
</html>