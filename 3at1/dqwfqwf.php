<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv=”refresh” content=”0,001" />
    <title>Document</title>
</head>
<body>
    <?php
    echo '<h1>Data: ' .date('Y-m-d').'</h1>';
    echo '<h1>Godzina: ' .date('h-i-s').'</h1>';
    ?>
    <?php
    $liczba=rand(-3,3);
    echo $liczba.'<br>';
    if($liczba>=0)
        echo 'liczba dodatnia';
    elseif($liczba==0)
        echo 'zero';
    else
        echo 'liczba ujemna';
    ?>
</body>
</html>