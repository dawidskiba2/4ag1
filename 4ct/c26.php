<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>.zam{color:red;}</style>
</head>
<body>
    <h3>Przeszukiwanie tekstu</h3>
<?php
$text=file('c26.txt')[0];
echo $text;
$regex=$_GET['regex'] ?? '//';
$nowe='<span class="zam">'.$_GET['nowe'].'</span>' ?? '';
//var_dump($text);
?>
<hr>
<form action="c26.php" method="get">
Wyrażenie:<input type="text" name="regex" value="<?=$regex ?>"><br>
Nowy: <input type="text" name="nowe" value="X"><br>
<input type="submit" value="szukaj"><br>
</form>
<h3>Znalezione</h3>
<?php

echo (preg_match($regex, $text)) ? 'znalazłem<br>' : ' nie znalazłem<br>';
echo (preg_match_all($regex, $text, $tab)).'<br>';
foreach($tab[0] as $slowo) echo $slowo.', ';
?>
<h3>Zastępowanie</h3>
<?php
$zmiana=(preg_replace($regex, $nowe, $text));
echo($zmiana);
?>
</body>
</html>