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
        <h1>CRUD - Baza danych kontakty - READ</h1>
        <p><i>READ - odczytywanie danych </i></p>
        <hr>
            <table> 
                <thead>
                    <tr>
                        <th>imię</th>
                        <th>nazwisko</th>
                        <th>typ</th>
                        <th>telefon</th>
                        <th>data ur.</th>
                    </tr>
                </thead>    
                <tbody>
                    <?php
                            // ------ ODCZYTYWANIE DANYCH -------------------
                            $link = mysqli_connect('localhost','root','','kontakty');
                            $wynik = mysqli_query($link,"SELECT * FROM osoby");
                                foreach($wynik as $wiersz)
                                {
                                    echo "<tr>";
                                        echo "<td>{$wiersz['imie']}</td>";
                                        echo "<td>{$wiersz['nazwisko']}</td>";
                                        echo "<td>{$wiersz['rodzaj']}</td>";
                                        echo "<td>{$wiersz['telefon']}</td>";
                                        echo "<td>{$wiersz['dataur']}</td>";                                        
                                    echo "</tr>";
                                }
                            mysqli_free_result($wynik);
                            mysqli_close($link);
                    ?>
                </tbody>    
            </table>
  </body>
</html>