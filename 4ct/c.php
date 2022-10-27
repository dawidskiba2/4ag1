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

$link=mysqli_connect('localhost','root','');
mysqli_query($link, 'DROP DATABASE osoby4ct');
mysqli_query($link, 'CREATE DATABASE osoby4ct');
mysqli_select_db($link, 'osoby4ct');
mysqli_query($link, "CREATE TABLE `osoby4ct`.`osoby` ( 
                    `pesel` CHAR(11) NOT NULL , 
                    `imie` VARCHAR(21) NOT NULL , `nazwisko` 
                    VARCHAR(21) NOT NULL )");
                    for($i=1; $i<1000; $i++){
mysqli_query($link, "INSERT INTO osoby VALUES ('123456', 'Jan', $i)");

}


    ?> 
</body>
</html>