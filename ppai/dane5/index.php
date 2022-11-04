<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <style>
        table, th, td{
            border: 1px solid black;
        }
        table{
            border-collapse: collapse;
        }
        a{
            text-decoration: none;
            color: green;
        }
    </style>
</head>
<body>
    <a href="index.php?wyswietl=wszystkie">Wyswietl wszystko</a>
    <a href="index.php?wyswietl=gov">Wyswietl maile gov.pl</a>
    <a href="index.php?wyswietl=erzeszow">Wyswietl maile erzeszow.pl</a>
    <form action="index.php" method="post">
        <input type="text" placeholder="email" name="nowymail">
        <input type="submit" value="Dodaj">
    </form>
    <?php
        $link = mysqli_connect('localhost', 'root', '', 'dane5');
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $q = mysqli_query($link, "DELETE FROM maile WHERE id='$id'");
            header('Location: index.php');
        }
        if(isset($_POST['nowymail']))
        {
            $nowymail = $_POST['nowymail'];
            mysqli_query($link, "INSERT INTO maile (id, mail) VALUES (NULL, '$nowymail')");
        }



        if(!isset($_GET['wyswietl']) || $_GET['wyswietl'] == 'wszystkie')
        {
            if(!isset($_GET['edycja']))
            {
                $dane = mysqli_query($link, "SELECT * FROM maile");
                echo '<table>';
                echo '<tr>';
                    echo '<th>id</th>';
                    echo '<th>mail</th>';
                echo '</tr>';
                foreach($dane as $row)
                {
                    echo '<tr>';
                        echo '<td>'.$row['id'].'</td>';
                        echo '<td>'.$row['mail'].'</td>';
                        echo '<td><a href="index.php?id='.$row['id'].'">USUŃ</a></td>';
                        echo '<td><a href="index.php?edycja='.$row['id'].'">EDYTUJ</a></td>';
                    echo '</tr>';
                }
            }
            elseif(isset($_GET['edycja']))
            {
                $id = $_GET['edycja'];
                $q = mysqli_query($link, "SELECT * FROM maile WHERE id='$id'");
                foreach($q as $row)
                {
                    if(isset($_POST['mail']))
                    {
                        $m = $_POST['mail'];
                        mysqli_query($link, "UPDATE maile SET mail='$m' WHERE id='$id'");
                        header('Location: index.php');
                    }
                    else
                    {
                        echo '<form method="post">';
                        echo '<input name="mail" type="text" placeholder="'.$row['mail'].'">';
                        echo '<input type="submit">';
                        echo '</form>';
                    }
                }
            }
        }
        elseif($_GET['wyswietl'] == 'gov')
        {
            wyswietlDane($link, '%gov.pl');
        }
        elseif($_GET['wyswietl'] == 'erzeszow')
        {
            wyswietlDane($link, '%erzeszow.pl');
        }
        elseif(isset($_GET['edycja']) && !isset($_GET['wyswietl']))
        {
            echo 'edycja';
        }
        echo '</table>';
        function wyswietlDane($link, $like)
        {
            if(!isset($_GET['edycja']))
            {
                $dane = mysqli_query($link, "SELECT * FROM maile WHERE mail LIKE '$like'");
                echo '<table>';
                echo '<tr>';
                    echo '<th>id</th>';
                    echo '<th>mail</th>';
                echo '</tr>';
                foreach($dane as $row)
                {
                    echo '<tr>';
                        echo '<td>'.$row['id'].'</td>';
                        echo '<td>'.$row['mail'].'</td>';
                        echo '<td><a href="index.php?id='.$row['id'].'">USUŃ</a></td>';
                        echo '<td><a href="index.php?edycja='.$row['id'].'">EDYTUJ</a></td>';
                    echo '</tr>';
                }
            }
            elseif(isset($_GET['edycja']))
            {
                $id = $_GET['edycja'];
                $q = mysqli_query($link, "SELECT * FROM maile WHERE id='$id'");
                foreach($q as $row)
                {
                    if(isset($_POST['mail']))
                    {
                        $m = $_POST['mail'];
                        mysqli_query($link, "UPDATE maile SET mail='$m' WHERE id='$id'");
                        header('Location: index.php');
                    }
                    else
                    {
                        echo '<form method="post">';
                        echo '<input name="mail" type="text" placeholder="'.$row['mail'].'">';
                        echo '<input type="submit">';
                        echo '</form>';
                    }
                }
            }
        }
    ?>
</body>
</html>