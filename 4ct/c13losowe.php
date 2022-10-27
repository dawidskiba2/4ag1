<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1">
    <title>Document</title>
</head>
<body>
    





<?php
echo "<h3>uniqid()</h3>";
echo uniqid('ZSEN_')."<br>";
echo uniqid('ZSEN_', TRUE)."<br>";
echo "<h3>rand()</h3>";
echo rand()."<br>";
echo getrandmax()."<br>";
echo (rand()/getrandmax()*100)."<br>";
echo (rand()/getrandmax()*150-50)."<br>";
echo "<h3>srand()</h3>";
srand(2137);
echo rand()."<br>";
echo rand()."<br>";
echo rand()."<br>";
echo "<h3>md5()</h3>";
$tekst="Ala ma kota i psa";
echo md5($tekst)."<br>";
$tekst2="Ala ma kota i psa";
echo md5($tekst2)."<br>"-;
echo sha1($tekst);
?>
</body>
</html>