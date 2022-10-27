<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Witam w mojej Bazie</title>
</head>
<body>
    
    <?php
    function sprawdz($link, $nazwa){
        $wynik=mysqli_query($link, 'SHOW DATABASES');
        while($wiersz=mysqli_fetch_array($wynik))
            $nazwa_bazy=$wiersz['Database'].'<br>';
            if($nazwa_bazy==$nazwa)
                return TRUE;
    }
    return FALSE;
    function tworz_baze($nazwa)
    {
        $link=mysqli_connect('localhost','root','');
        if(sprawdz($link, $nazwa))
            mysqli_query($link, 'DROP DATABASE mojabaza');
        mysqli_query($link, 'CREATE DATABASE mojabaza');
        mysqli_select_db($link, 'mojabaza');
        $q="CREATE TABLE `mojabaza`.`osoby` ( `PESEL` TEXT CHARACTER SET utf8 COLLATE utf8_bin NOT NULL , `imie` VARCHAR(20) NOT NULL , `nazwisko` VARCHAR(25) NOT NULL ) ENGINE = InnoDB";
        mysqli_query($link,$q);
        return $link;
    }

        function zapisz($link_db){

        $dane[]=array('544333','Jan','Kowalski');
        $dane[]=array('5455323','Daria','Dobra');
        $dane[]=array('55342233','Kamil','Horowski');
        $dane[]=array('545789333','Mariusz','Pudzianowski');
        echo'<pre>';
        print_r($dane);
        echo'</pre>';
        $q="INSERT INTO osoby VALUES ('1231321', 'Jan', 'Kowal')";
        mysqli_query($link_db,$q);
        $q="INSERT INTO osoby VALUES ('12312323', 'Adam', 'Specjalny')";
        mysqli_query($link_db,$q);
        }
        $link_db=tworz_baze('mojabaza');
        zapisz($link_db);
        echo "Zrobione!<br>";
        

    ?>

</body>
</html>