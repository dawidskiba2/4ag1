<?php
session_start();
$_SESSION['nazwisko']='Kowalski';
$_SESSION['wiek']=0;
?>
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
            color:white
            
            
        }
        </style>
</head>
<body>
    
nazwisko:<?php echo $_SESSION['nazwisko'];?><br>
wiek:<?php echo $_SESSION['wiek'];?><br>
<a href="c14sesje2.php">uoooooooooooooooooooooh</a>
<?php $_SESSION['nazwisko']="nowak";?>
<?php

















?>
</body>
</html>