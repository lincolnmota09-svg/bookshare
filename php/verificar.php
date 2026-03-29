<?php

session_start();

if(!isset($_SESSION['id'])){
    unset ($_SESSION['id']);
    unset($_SESSION['usuario']);

    session_destroy();
    header("location: ../login.php");
}

?>