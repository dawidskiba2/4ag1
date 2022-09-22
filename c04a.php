<?php
    session_start();
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
    <a href="c04.php">c04</a>
    <?php
        $nazwa = $_SESSION['cookie'];
        function sprawdzCookie($n)
        {
            if(isset($_COOKIE[$n]))
                return $_COOKIE[$n];
            else
                echo '<br>Cookie jest nieustawione.';
        }  
        echo sprawdzCookie($nazwa);
        var_dump($_SESSION);
        var_dump($_COOKIE);
    ?>
</body>
</html>