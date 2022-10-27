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
    
    $query = "SELECT * FROM $nazwaTabeli";
    $result = mysqli_query($db, $query);

    echo '<table>';
        echo '<tr><th>ID</th><th>login</th><th>haslo</th><tr>';
        foreach($result as $row)
        {
            echo '<tr>';
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['login'].'</td>';
                echo '<td>'.$row['haslo'].'</td>';
            echo '</tr>';
        }
    echo '</table>';
}
$link = mysqli_connect('localhost', 'root', '', '4ag1gra');
wyswietl($link, 'osoby');
echo czyIstnieje($link, 'marek');
?>?>
</body>
</html>