<?php
session_start();
require 'conexao.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

 $query = "SELECT * FROM login WHERE loginUser = '$login' AND passwordUser = '$senha';";
 $sql_verificar = mysqli_query($conexao, $query);
 // $resultado = mysqli_fetch_assoc($sql_verificar);
 $linhas_login = mysqli_num_rows($sql_verificar);
  
 if( $linhas_login > 0)
 {
     $_SESSION['logado'] = true;
     header('Location:admin.php');
 }
 else 
 {
     header('Location:index.php');
 }


?>
