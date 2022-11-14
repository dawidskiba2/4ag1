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
    <p><i>CREATE - dodawanie danych</i></p>
    <hr>
    <form action="create.php" method="post">
        <label for="mail">Podaj mail</label>
        <input type="text" name="mail" id="mail">
        <input type="submit" value="Dodaj mail">
    </form>
    <table>
        <tr><th>Email</th></tr>
        <?php
            $link = mysqli_connect('localhost', 'root', '', 'dane5');

            if(isset($_POST['mail']))
            {
                $mail = $_POST['mail'];
                mysqli_query($link, "INSERT INTO maile(id, mail) VALUES (NULL, '$mail')");
            }
            $wynik = mysqli_query($link, "SELECT * FROM maile ORDER BY id DESC");
                foreach($wynik as $wiersz)
                {
                    echo '<tr>';
                        echo '<td>'.$wiersz['mail'].'</td>';
                    echo '</tr>';
                }
            mysqli_free_result($wynik);
            mysqli_close($link);
        ?>
    </table>
</body>
</html>