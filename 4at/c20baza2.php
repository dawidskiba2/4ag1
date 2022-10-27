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
    function tworz_baze($nazwa)
    {
        $link=mysqli_connect('localhost','root','');
        //if(sprawdz($link, $nazwa))
            mysqli_query($link, 'DROP DATABASE mojabaza');
        mysqli_query($link, 'CREATE DATABASE mojabaza');
        mysqli_select_db($link, 'mojabaza');
        $q="CREATE TABLE `mojabaza`.`osoby` ( `PESEL` TEXT CHARACTER SET utf8 COLLATE utf8_bin NOT NULL , `imie` VARCHAR(20) NOT NULL , `nazwisko` VARCHAR(25) NOT NULL ) ENGINE = InnoDB";
        mysqli_query($link,$q);
        return $link;
    }   
    function zpliku($nazwa){
        $plik=fopen($nazwa, 'r');
        while(!feof($plik)) {
            $dane=rtrim(fgets($plik));
          if(strlen($dane)>11) {
              $tab=explode(',',$dane);
              $tab[0]=trim($tab[0],"' ");
              $tab[1]=trim($tab[1],"' ");
              $tab[2]=trim($tab[2],"' ");
              $osoby[]=array($tab[0],
                             $tab[1],
                             $tab[2]);
            }
        }
        return $osoby;
    }
    function zapisz($link, $nazwa){
        $dane=zpliku($nazwa);

        foreach ($dane as $klucz=>$wiersz){
        $q="INSERT INTO osoby VALUES ('$wiersz[0]', '$wiersz[1]', '$wiersz[2]')";
        echo $q.'<br>';
        mysqli_query($link, $q);
        }
    }
        $link_db=tworz_baze('mojabaza');
        zapisz($link_db, 'c20dane.txt');
        echo "Zrobione!<br>";
        ?>
</body>
</html>