<?php
    session_start();    
    if(isset($_POST['user']))
    {
        if($_POST['user'] == "moj@test.pl" && $_POST['password']=="tajne")
        {
            $_SESSION['log'] = true;
            header("Location: read.php");
        }
        else
        {
            $_SESSION['log'] == false;
        }
    }
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
                    </div>
                </main>
            </div>
        </div>

        <div class="container">
            <main class="form-signin w-100 m-auto">
                <form method="post" action="logowanie.php">
                    <h1 class="h3 mb-3 fw-normal">
                        <?php
                            if(isset($_POST['logprocess']))
                            {
                                echo 'b????dne dane logowania, podaj ponownie';
                            }
                            else{
                                echo 'podaj dane';
                            }
                        ?>
                    </h1>

                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="user">
                        <label for="floatingInput">Login</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Has??o</label>

                        <input type="hidden" name="logprocess" value="true">
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Zaloguj</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2017???2022</p>
                </form>
    </main>

        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>