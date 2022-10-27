<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $liczba=rand(-50,50);
    echo $liczba.'<br>';
    if($liczba>=0) 
    echo '<h1>Liczba dodatnia lub 0!</h1>';
    else
    echo '<h1>Liczba ujemna</h1>';
    ?>

</body>
</html>