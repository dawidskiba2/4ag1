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

       $nazwa=$_SESSION['nazwa'];
       function ciacho($nazwa) {
           if(isset ($_COOKIE[$nazwa]))
           return $_COOKIE[$nazwa];
           else
           return 'Nie ma takiego cookie';
       }
       echo 'Nazwa ciacha:' .$nazwa '<br>';
       echo 'Wartość cookie='.ciacho($nazwa);
        
        }
    ?>
</body>
</html>