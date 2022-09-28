<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, tr{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Auta</h1>
    <table>
        <?php
            $db = mysqli_connect('localhost', 'root', '', 'auta');
            $wynik = mysqli_query($db, "SELECT * FROM oferty");
            
            foreach($wynik as $record)
            {
                echo '<tr>';
                    echo '<td>'.$record['marka'].'</td>';
                    echo '<td>'.$record['model'].'</td>';
                    echo '<td>'.$record['cena'].'</td>';
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>