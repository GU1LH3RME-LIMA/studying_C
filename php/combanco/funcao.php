<?php


$mat=$_GET['tMat'];
$nome=$_GET['tNome'];
$nomeMae=$_GET['tMae'];
$nomePai=$_GET['tPai'];
$cpf=$_GET['tCpf'];
$tel=$_GET['tTel'];
$renda=$_GET['tRenda'];
$bt=$_GET['btn1'];

function conecta() {
	$conexao = mysqli_connect('localhost', 'root', '', 'octacilio');
	print "conectada com sucesso!!!<br>";
	return $conexao;
}

function inserir($conexao, $query) {
	if(mysqli_query($conexao, $query)) {
		print "inserido com sucesso!!!<br>";
	}
	else 
		print "erroo ". mysqli_errno($conexao);
}
function alterar($conexao, $query){
	if(mysql_query($conexao,$query)){
		print("alterado com sucesso!!!");
	}
	else 
		print "erroo ". mysqli_errno($conexao);
}
function apaga($conexao, $query){
	if(mysql_query($conexao,$query)){
		print("apagado com sucesso!!!");
	}
	else 
		print "erroo ". mysqli_errno($conexao);
}
function recupera($conexao, $query){
	
		print $query;
		$reg=mysql_fetch_array($resultado);
		session_start();
	$_SESSION['nome']=$reg['nome'];
	$_SESSION['matr']=$reg['matr'];
	$_SESSION['nomePai']=$reg['nomePai'];
	$_SESSION['nomeMae']=$reg['nomeMae'];
	$_SESSION['tel']=$reg['tel'];
	$_SESSION['cpf']=$reg['cpf'];
	$_SESSION['renda']=$reg['rendaFamiliar'];
	print $reg['nome'];
}
$con=conecta();
if($bt=="Incluir"){
	$query = "insert into aluno(nome,nome_Mae,nome_Pai,cpf,tel,rendaFamiliar) values"
	
}