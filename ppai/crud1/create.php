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
        label, input[type="submit"] {
            margin-top:18px;
            display:block;
        }
    </style>    
  </head>
  <body>
        <h1>CRUD - Baza danych kontakty - CREATE</h1>
        <p><i>CREATE - dodawanie danych </i></p>
        <hr>
        <form method="post" action="create.php">
            <label for="imie">Podaj imię:</label>
            <input type="text" name="imie" id="imie">

            <label for="nazwisko">Podaj nazwisko:</label>
            <input type="text" name="nazwisko" id="nazwisko"> 

            <label for="typ">Wybierz typ:</label>    
            <select name="rodzaj" id="rodzaj">
                <option value="-">-</option>
                <option value="R">Rodzina</option>          
                <option value="Z">Znajomi</option> 
                <option value="P">Praca</option>                                       
            </select>
            <label for="telefon">Podaj telefon:</label>  
            <input type="text" name="telefon" id="telefon"> 

            <label for="dataur">Podaj datę urodzin:</label>  
            <input type="text" name="dataur" id="dataur"> 

            <input type="submit" value="Dodaj kontakt">
        </form>                
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
                            // ----- TO MUSI BYĆ PIERWSZE ------------------
                            $link = mysqli_connect('localhost','root','','kontakty');

                            // ------ DODAWANIE DANYCH ----------------------
                            if(isset($_POST['imie']) && isset($_POST['nazwisko']))
                            {
                                $imie = $_POST['imie'];
                                $nazwisko = $_POST['nazwisko'];
                                $typ = $_POST['typ'];
                                $telefon = $_POST['telefon'];
                                $dataur = $_POST['dataur'];
                                $wynik = mysqli_query($link,"INSERT INTO osoby (ido, imie, nazwisko, rodzaj, 
                            telefon, dataur) VALUES (NULL, '$imie', '$nazwisko', '$rodzaj', '$telefon', '$dataur');");

                                
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
                                    echo "</tr>";
                                }
                            mysqli_free_result($wynik);
                            mysqli_close($link);
                    ?>
                </tbody>    
            </table>
  </body>
</html>