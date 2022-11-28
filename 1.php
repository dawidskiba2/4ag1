<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label{
            
        }
    </style>
</head>
<body>

    <?php
        if(isset('liczbaA')&&isset('liczbaB')&&isset('liczbaC')){
        $a=$_GET['liczbaA'];
        $b=$_GET['liczbaB'];
        $c=$_GET['liczbaC'];}

    ?>

    <form action="1.php" method="get">
    <label>Podaj a: </label><input type="number" name="liczbaA">
    <label>Podaj b: </label><input type="number" name="liczbaB">
    <label>Podaj c: </label><input type="number" name="liczbaC">
    <input type="submit" value="oblicz">
    <Button>Oblicz</Button>
    
 

        
    </div>
</form>
    
</body>
</html>