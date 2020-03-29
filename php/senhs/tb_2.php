<?php
Session_start();
$nome=$_POST['tNome'];
$login=$_POST['tUsu'];
$senha=$_POST['tSenha'];
$_SESSION['nome']=$nome;
if($senha==123){
header("location: tb_3.php");}
else{
	print("<font color ='blue' size ='10'>Senha não reconhecida</font>");
}
?>