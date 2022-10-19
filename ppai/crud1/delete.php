<!doctype html>
<html lang="pl-PL">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontakty</title>
    <style>
        th , td {
            padding:10px;
            border:1px solid darkgrey;
        }
    </style>    
  </head>
  <body>
        <h1>CRUD - Baza danych kontakty - DELETE</h1>
        <p><i>DELETE - kasowanie danych </i></p>
        <hr>
            <table> 
                <thead>
                    <tr>
                        <th>imię</th>
                        <th>nazwisko</th>
                        <th>typ</th>
                        <th>telefon</th>
                        <th>data ur.</th>                        
                        <th>X</th>
                    </tr>
                </thead>    
                <tbody>
                    <?php
                            // ----- TO MUSI BYĆ PIERWSZE ------------------
                            $link = mysqli_connect('localhost','root','','kontakty');

                            // ------ KASOWANIE DANYCH ----------------------
                            if(isset($_GET['ido']))
                            {
                                $ido = $_GET['ido'];
                                $wynik = mysqli_query($link,"DELETE FROM osoby WHERE ido='$ido'");
                            }

                            // ------ ODCZYTYWANIE DANYCH -------------------
                            
                            $wynik = mysqli_query($link,"SELECT * FROM osoby");
                                foreach($wynik as $wiersz)
                                {
                                    echo "<tr>";
                                        echo "<td>{$wiersz['imie']}</td>";
                                        echo "<td>{$wiersz['nazwisko']}</td>";
                                        echo "<td>{$wiersz['rodzaj']}</td>";
                                        echo "<td>{$wiersz['telefon']}</td>";
                                        echo "<td>{$wiersz['dataur']}</td>";
                                        echo "<td><a href=\"delete.php?ido={$wiersz['ido']}\">X</td>";
                                    echo "</tr>";
                                }
                            mysqli_free_result($wynik);
                            mysqli_close($link);
                    ?>
                </tbody>    
            </table>
  </body>
</html>