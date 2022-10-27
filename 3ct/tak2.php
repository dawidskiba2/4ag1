<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $liczba=rand(-3,3);
    echo $liczba.'<br>';
    if($liczba>=0) 
    echo '<h1>Liczba dodatnia</h1>';
    elseif($liczba==0)
    echo '<h1>Zero</h1>';
    else
    echo '<h1>Liczba ujemna</h1>';
    ?>

</body>
</html>