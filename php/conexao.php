<?php

$conn = mysqli_connect("localhost","root","","bd_bookshare");

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}