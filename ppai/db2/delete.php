<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th, td{
            padding: 10px;
            border: 1px solid darkgrey;
        }
    </style>
</head>
<body>
    <h1>CRUD - Baza danych kontakty - READ</h1>
    <p><i>DELETE - usuwanie danych</i></p>
    <hr>
    <table>
        <tr><th>Email</th><th>Usuń</th></tr>
        <?php
            $link = mysqli_connect('localhost', 'root', '', 'dane5');

            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
                mysqli_query($link, "DELETE FROM maile WHERE id='$id'");
            }

            $wynik = mysqli_query($link, "SELECT * FROM maile");
                foreach($wynik as $wiersz)
                {
                    echo '<tr>';
                        echo '<td>'.$wiersz['mail'].'</td>';
                        echo "<td><a href=\"delete.php?id={$wiersz['id']}\">X</a></td>";
                    echo '</tr>';
                }
            mysqli_free_result($wynik);
            mysqli_close($link);
        ?>
    </table>
</body>
</html>