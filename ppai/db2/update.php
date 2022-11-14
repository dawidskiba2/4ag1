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
    <p><i>UPDATE - edycja danych</i></p>
    <hr>
    <table>
        <tr><th>Email</th><th>Edytuj</th></tr>
        <?php
            $link = mysqli_connect('localhost', 'root', '', 'dane5');

            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
                $wynik = mysqli_query($link, "SELECT * FROM  maile WHERE id='$id'");
                foreach($wynik as $wiersz) {}
            ?>
                <form action="update.php" method="post">
                    <label for="mail">Podaj mail</label>
                    <input type="text" name="mail" id="mail" value="<?php echo $wiersz['mail']; ?>">
                    <input type="hidden" name="id" value="<?php echo $wiersz['id']; ?>">
                    <input type="submit" value="Zmień email">
                </form>
            <?php
            }

            if(isset($_POST['id']))
            {
                $id = $_POST['id'];
                $mail = $_POST['mail'];
                mysqli_query($link, "UPDATE maile SET mail= '$mail' WHERE id = '$id'");
            }

            $wynik = mysqli_query($link, "SELECT * FROM maile");
                foreach($wynik as $wiersz)
                {
                    echo '<tr>';
                        echo '<td>'.$wiersz['mail'].'</td>';
                        echo "<td><a href=\"update.php?id={$wiersz['id']}\">E</a></td>";
                    echo '</tr>';
                }
            mysqli_free_result($wynik);
            mysqli_close($link);
        ?>
    </table>
</body>
</html>