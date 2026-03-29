<?php

include("conexao.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];

$query = "INSERT INTO `dados`( `usuario`, `senha`, `email`) VALUES ( '$usuario', '$senha', '$email')";
$resultado = mysqli_query($conn,$query);

header("location: ../login.html");
exit();

?>