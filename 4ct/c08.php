<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        body{
            background-color:black;
            color:white;
            font-size:32px;
        }
        </style>
</head>
<body>

<?php 

$tekst = fopen("c08.txt", "r+");

while (!feof($tekst)) {
    $linia = rtrim(fgets($tekst));
echo $linia.'<br>'.PHP_EOL;
}


fputs($tekst, 'hoou'.PHP_EOL);
fputs($tekst, '((((((:'.PHP_EOL);
fclose($tekst);






$bd= new mysqli("localhost", "root", "", "bd");
$haha= $bd -> query()

$db = mysqli_connect("localhost", "root", "");
$baza = mysqli_select_db($db,"haha")
$wynik = mysqli_query($db,)

?>
    
</body>
</html>