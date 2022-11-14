<?php
    if(!isset($_COOKIE['skrypt2']))
    {
        setcookie('skrypt2', '<b>Miło nam, że nas znowu odwiedziłeś</b>', time() + 20);
    }
?>
<!DOCTYPE html>
<html lang="pl-pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="css/styl6.css">
</head>
<body>
    <header>
        
        <div id="header-text">
            <h2>Odloty z lotniska</h2>
        </div>
        <div id="header-img">
            <img src="grafika/zad6.png" alt="logotyp">
        </div>
    </header>

    <div id="main">
        <h4>tabela odlotów</h4>
        <table>
            <tr>
                <th>lp.</th>
                <th>numer rejsu</th>
                <th>czas</th>
                <th>kierunek</th>
                <th>status</th>
            </tr>
            <!-- SKRYPT 1 -->
            <?php
                $link = mysqli_connect('localhost', 'root', '', 'egzamin');
                $zapytanie1 = mysqli_query($link, "SELECT id, nr_rejsu, czas, kierunek, status_lotu from odloty ORDER BY czas DESC");
                foreach($zapytanie1 as $wiersz)
                {
                    echo '<tr>';
                    echo '<td>'.$wiersz['id'].'</td>';
                    echo '<td>'.$wiersz['nr_rejsu'].'</td>';
                    echo '<td>'.$wiersz['czas'].'</td>';
                    echo '<td>'.$wiersz['kierunek'].'</td>';
                    echo '<td>'.$wiersz['status_lotu'].'</td>';
                    echo '</tr>';
                }
                mysqli_free_result($zapytanie1);
                mysqli_close($link);
            ?>
        </table>
    </div>

    <footer>
        <div id="footer-1">
            <a href="grafika/kw1.jpg" target="_blank">Pobierz obraz</a>
        </div>
        <div id="footer-2">
            <!-- SKRYPT 2 -->
            <?php
                if(!isset($_COOKIE['skrypt2']))
                {                  
                    echo '<p>'.'<i>Dzień dobry! Sprawdź regulamin naszej strony</i>'.'</p>';
                }
                else{
                    echo '<p>'.'<i>Dzień dobry! Sprawdź regulamin naszej strony</i>'.'</p>';
                }
                
            ?>
        </div>
        <div id="footer-3">
            Autor: 1234567890
        </div>
    </footer>
</body>
</html>
