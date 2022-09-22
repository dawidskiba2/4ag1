<?php
    session_start();
    function losowa($min,$max)
    {
        return rand($min,$max);
    }
    $losowa = losowa(1,100);
    $nazwa = uniqid();
    $_SESSION['cookie'] = $nazwa;
    setcookie($nazwa, $losowa, time() + 5);
    echo $losowa;
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="c04a.php">c04a</a>
    <?php

    ?>
</body>
</html>