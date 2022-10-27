
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baza odczyt</title>
    <style>
        table {border-collapse: collapse; box-shadow: 5px 15px lightgray;}
        td,th {border:1px blue solid;
            padding:5px:width:80px;}
            th {background-color: yellow;}
             tr:nth-child(2n+1) {background-color: lightgray;}

    </style>
</head>
<body>
    <?php
    function polacz($baza) {
        $link=mysqli_connect('localhost', 'root','');
        mysqli_query($link,'USE '.$baza);
        return $link;

    } //polacz($baza)

    function wypisz($link,$tabela){
        $odp=mysqli_query($link, 'SELECT pesel,imie,nazwisko 
        FROM '.$tabela);
        echo '<table><tr><th>PESEL<th>imie</th><th>nazwisko</th></tr>';
        while($rekord=mysqli_fetch_array($odp)) {
            echo '<tr><td>'.$rekord[0].'</td>
            <td>' .$rekord[1].'</td>
            <td>' .$rekord[2]. '</td></tr>';





        }
        echo '</table>';
    }//wypisz($link)



   $link= polacz('mojabaza');
   wypisz($link, 'osoby');


    ?>
    
</body>
</html>