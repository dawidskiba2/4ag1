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
            color:white;
            font-size:32px;
        }
        </style>
</head>
<body>

<?php 

$uooh=file("c09.txt");
for ($i=0; $i < sizeof($uooh) ; $i++) { 
    $uooh[$i]=rtrim($uooh[$i]);
}

echo "<pre>";
print_r($uooh);
echo "</pre>";


?>
    
</body>
</html>