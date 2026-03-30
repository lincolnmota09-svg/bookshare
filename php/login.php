<?php 
include ("conexao.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = "SELECT * FROM `dados` WHERE `usuario` = '$usuario' AND `senha` = '$senha'";
$resultado = mysqli_query($conn,$query);


if(mysqli_num_rows($resultado) > 0){
    $user = mysqli_fetch_assoc($resultado);

    session_start();
    $_SESSION['id'] = $user['id'];
    $_SESSION['usuario'] = $user['usuario'];
    header("location: ../pagina_inicial/index.php");
    exit();
}else{
    header("location: ../login.html");
    exit();
}

?>