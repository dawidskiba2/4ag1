<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BAZA</title>
</head>

<body>
    
    <?php

    function createDB($dbName) {
        $handler = mysqli_connect('localhost', 'root', ' ');
        mysqli_query($handler, "DROP DATABASE $dbName");
        mysqli_query($handler, "CREATE DATABASE $dbName");
        mysqli_select_db($handler, $dbName);
        mysqli_query($handler, 'CREATE TABLE `osoby` ( `pesel` CHAR(11) NOT NULL ,
        `imie` VARCHAR(11) NOT NULL ,
        `nazwisko` VARCHAR(15) NOT NULL )');
        return $handler;
    }


    function insertData($handler) {
        $q = "INSERT INTO osoby VALUES ('324243', 'Adam' , 'Słodowy')";


    }
    function wpisz($li) {
        $dane[]=array('324243', 'Adam' , 'Słodowy'), 
        $dane[]=array('348989', 'Kamil' , 'Nowak'), 
        $dane[]=array('234892', 'Marek' , 'Kowalski'), 
        $dane[]=array('238488', 'Piotr' , 'Wasilewski'),
        foreach($dane as $wiersz){
            $q="INSERT INTO osoby VALUES (' $wiersz[0]',
                                          ' $wiersz[1]',
                                          ' $wiersz[2]') ";            
        }
    }




    // echo '<pre>';
    // var_dump($data);
    // insertData(createDB('osoby4AT2'));
    // echo 'Done';
    ?>
</body>

</html>