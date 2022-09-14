<?php
    session_start();
?>
<!doctype html>
<html lang="pl-PL">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontakty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Kontakty</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            
                    <div class="collapse navbar-collapse" id="navbarsExample03">
                        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="read.php">Wszyscy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="read.php?kategoria=R">Rodzina</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="read.php?kategoria=Z">Znajomi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="read.php?kategoria=P">Praca</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <main>
                <div class="bg-light p-5 rounded mb-5">
                    <h1>mojeKONTAKTY</h1>
                    <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
                    <a class="btn btn-lg btn-primary" href="logowanie.php" role="button">Logowanie &raquo;</a>
                    <a class="btn btn-lg btn-danger" href="wylogowanie.php" role="button">Wyloguj &raquo;</a>
                </div>
            </main>


    <div class="container">
        <h1>Lista kontaktów</h1>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">

            <table class="table">
                <thead>
                    <tr>
                        <th>Imię</th>
                        <th>Nazwisko</th>
                        <th>Typ</th>
                        <th>Telefon</th>
                    </tr>
                    <tbody>
                        <?php
                            if(isset($_SESSION['log']))
                            {

                                $link = mysqli_connect('localhost', 'root', '', 'kontakty');    
                                if(isset($_GET['kategoria']))
                                {
                                    $kategoria = $_GET['kategoria'];
                                    $wynik = mysqli_query($link, "SELECT * FROM osoby WHERE rodzaj='$kategoria'");
                                }
                                else
                                {
                                    $wynik = mysqli_query($link, "SELECT * FROM osoby");
                                }

                                    foreach($wynik as $wiersz)
                                    {
                                        echo "<tr>";
                                            echo "<td>{$wiersz['imie']}</td>";
                                            echo "<td>{$wiersz['nazwisko']}</td>";
                                            echo "<td>{$wiersz['rodzaj']}</td>";
                                            echo "<td>{$wiersz['telefon']}</td>";
                                        echo "</tr>";
                                    }
                                mysqli_free_result($wynik);
                                mysqli_close($link);
                            }
                        ?>
                    </tbody>
                </thead>
            </table>

            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>