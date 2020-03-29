<?php
Session_start();
$nome=$_POST['tNome'];

$usu=$_POST['tUsu'];
$_SESSION['nome']=$nome;
header("location: sessao3.php");
?>