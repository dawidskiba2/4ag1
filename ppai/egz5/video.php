<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video On Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
    <div id="logo">
        <h1>Internetowa wypożyczalnia filmów</h1>
    </div>
    <div id="dane">
        <table>
            <tr>
                <th>Kryminał</th><th>Horror</th><th>Przygodowy</th>
            </tr>
            <tr>
                <td>20</td><td>30</td><td>20</td>
            </tr>
        </table>
    </div>
    </header>

    <section id="polecamy">
    <h3>Polecamy</h3>
        <div class="filmy">
            <?php
                $link = mysqli_connect('localhost', 'root', '', 'dane3');
                $wynik = mysqli_query($link, "SELECT id, nazwa, opis, zdjecie FROM produkty WHERE id=18 || id=22 || id=23 || id=25");
                foreach($wynik as $wiersz)
                {
                    echo '<article class="film">';
                        echo '<h4>'.$wiersz['id'].'. '.$wiersz['nazwa'].'</h4>';
                        echo '<img src="grafika/'.$wiersz['zdjecie'].'" alt="film">';
                        echo '<p>'.$wiersz['opis'].'</p>';
                    echo '</article>';
                }
                mysqli_free_result($wynik);
                mysqli_close($link);
            ?>
        </div>
    </section>

    <section id="filmyfantastyczne">
        <h3>Filmy fantastyczne</h3>
        <div class="filmy">
            <?php
                $link = mysqli_connect('localhost', 'root', '', 'dane3');
                $wynik = mysqli_query($link, "SELECT id, nazwa, zdjecie, opis FROM produkty WHERE Rodzaje_id=12");
                foreach($wynik as $wiersz)
                {
                    echo '<article class="film">';
                        echo '<h4>'.$wiersz['id'].'. '.$wiersz['nazwa'].'</h4>';
                        echo '<img src="grafika/'.$wiersz['zdjecie'].'" alt="film">';
                        echo '<p>'.$wiersz['opis'].'</p>';
                    echo '</article>';
                }
            ?>
        </div>
    </section>

    <footer>
        <?php
            if(isset($_POST['filmid'])){
                $link = mysqli_connect('localhost', 'root', '', 'dane3');
                $id = $_POST['filmid'];
                $wynik = mysqli_query($link, "DELETE FROM produkty WHERE id='$id'");
                mysqli_close($link);
            }
        ?>
        <form action="video.php" method="post">
            <label>Usuń film nr.: <input type="number" name="filmid"></label>
            <input type="submit" value="Usuń film">
        </form>
        <span>Stronę wykonał: <a href="mailto:ja@poczta.com">1234567890</a></span>
    </footer>
    
</body>
</html>