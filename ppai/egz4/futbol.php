<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rozgrywki futbolowe</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header id="baner">
        <h2>Światowe Rozgrywki Piłkarskie</h2>
        <img src="grafika/obraz1.jpg" alt="boisko">
    </header>

    <section id="mecze">
        <?php
            $link = mysqli_connect('localhost', 'root', '', 'egzamin4');
            $kwerenda = mysqli_query($link, "SELECT zespol1, zespol2, wynik, data_rozgrywki FROM rozgrywka WHERE zespol1='EVG'");

            foreach($kwerenda as $rekord){
                echo '<article class="mecz">';
                    echo '<h3>'.$rekord['zespol1'].'-'.$rekord['zespol2'].'</h3>';
                    echo '<h4>'.$rekord['wynik'].'</h4>';
                    echo '<p>w dniu: '.$rekord['data_rozgrywki'].'</p>';
                echo '</article>';
            }

            mysqli_free_result($kwerenda);
            mysqli_close($link);
        ?>
    </section>

    <section id="sekreprezentacja">
        <h2>Reprezentacja Polski</h2>
        <article id="reprezentacja">
            <div id="left">
                Podaj pozycję zawodnika (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy)
                <form method="post" action="futbol.php">
                    <input type="number" name="pozycja" min="1" max="4" value="1">
                    <input type="submit" value="Sprawdź">
                </form>

                <?php
                    if(isset($_POST['pozycja']))
                        $pozycja = $_POST['pozycja'];
                    else
                        $pozycja = 0;

                    $link = mysqli_connect('localhost', 'root', '', 'egzamin4');
                    $kwerenda = mysqli_query($link, "SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id='$pozycja'");

                    echo '<ul>';
                        foreach($kwerenda as $rekord)
                        {
                            echo '<li>'.$rekord['imie'].' '.$rekord['nazwisko'].'</li>';
                        }
                    echo '</ul>';

                    mysqli_free_result($kwerenda);
                    mysqli_close($link);
                ?>
            </div>

            <div id="right">
                <img src="grafika/zad1.png" alt="Piłkarz">
                <p>Autor: 1234567890</p>
            </div>
        </article>
    </section>
</body>
</html>