<?php
    session_start();

    if (!isset($_SESSION['logout'])){
        header('Location: logout.php');
        exit();
    } else {
        header('Location: index.php');
    }

?>