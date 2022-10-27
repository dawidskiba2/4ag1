<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operatory</title>
</head>
<style>
    body{
        color: green;
        background-color: black;
        font-size: 28px;
    }
</style>
<body>
    Skrypt VI to jest.<br>
    <hr>
    <?php 
        $g='globalna';

        function f1(){
            global $g;
            $l='10<br>';
            $l++;
            echo $l.'<br>';
            echo $g.'<br>';
        }

        f1();
        f1();
        f1();
        f1();
        //echo $l; //"zmienna lokalna"
        echo $g; //"zmienna globalna"
    ?>
</body>
</html>