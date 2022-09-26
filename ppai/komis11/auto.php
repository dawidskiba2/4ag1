<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komis samochodowy</title>
    <link rel="stylesheet" href="css/auto.css">
</head>
<body>
    <header>
        <h1>SAMOCHODY</h1>
    </header>

    <section>
        <div id="left">
            <h2>Wykaz samochodów</h2>
            <?php
                $bd = mysqli_connect('localhost', 'root', '', 'komis');
                $kwerenda = mysqli_query($bd, "SELECT * FROM samochody");
                echo '<ul>';
                    foreach($kwerenda as $rekord)
                    {
                        echo '<li>'.$rekord['id'].' '.$rekord['marka'].' '.$rekord['model'].'</li>';
                    }
                echo '</ul>';
                mysqli_free_result($kwerenda);
                mysqli_close($bd);
            ?>
            <h2>Zamówienia</h2>
            <?php
                $bd = mysqli_connect('localhost', 'root', '', 'komis');
                $kwerenda = mysqli_query($bd, "SELECT * FROM zamowienia");
                echo '<ul>';
                    foreach($kwerenda as $rekord)
                    {
                        echo '<li>'.$rekord['Samochody_id'].' '.$rekord['Klient'].'</li>';
                    }
                echo '</ul>';
                mysqli_free_result($kwerenda);
                mysqli_close($bd);
            ?>
        </div>
        <div id="right">
            <h2>Pełne dane: Fiat</h2>
            <?php
                $bd = mysqli_connect('localhost', 'root', '', 'komis');
                $kwerenda = mysqli_query($bd, "SELECT * FROM samochody WHERE marka='Fiat'");
                echo '<ul>';
                    foreach($kwerenda as $rekord)
                    {
                        echo $rekord['id'].' / ';
                        echo $rekord['marka'].' / ';
                        echo $rekord['model'].' / ';
                        echo $rekord['rocznik'].' / ';
                        echo $rekord['kolor'].' / ';
                        echo $rekord['stan'].' / ';
                        echo '<br>';
                    }
                echo '</ul>';
                mysqli_free_result($kwerenda);
                mysqli_close($bd);
            ?>
        </div>
    </section>

    <footer>
        <table>
            <tr>
                <td>
                    <a href="kwerendy.txt">Kwerendy</a>
                </td>
                <td>
                    Autor: 1234567890
                </td>
                <td>
                    <img src="grafika/auto.png" alt="komis samochodowy">
                </td>
            </tr>
        </table>
    </footer>
</body>
</html>