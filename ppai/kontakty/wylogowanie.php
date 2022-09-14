<?php
    session_start();
    unset($_SESSION['log']);
    session_destroy();
    header('Location: logowanie.php');
?>