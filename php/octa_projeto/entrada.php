<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf=8" />
<title> Brecho de coisas </title>
</head>
<body>
<form name="fr1">
<?php

$sql="select preco,nome, imagem from prod limit 8";
$conexao = mysql_connect('localhost','root','','lojadepto');
$msg="Conectada com sucesso<br>";
$resultado = mysql_query($conexao,$sql);
global $reg;
session_start();
$numregs = mysql_num_rows($resultado);
$i=1;
while ($i<=$numregs){
	$reg=mysql_fetch_array($resultado);

if($i==1){
	$p1=$reg['preco'];
	$p1=$reg['imagem'];
}
if($i==2){
	$p2=$reg['preco'];
	$p2=$reg['imagem'];
}
if($i==3){
	$p3=$reg['preco'];
	$p3=$reg['imagem'];
}
if($i==4){
	$p4=$reg['preco'];
	$p4=$reg['imagem'];
}
if($i==5){
	$p5=$reg['preco'];
	$p5=$reg['imagem'];
}
if($i==6){
	$p6=$reg['preco'];
	$p6=$reg['imagem'];
}
if($i==7){
	$p7=$reg['preco'];
	$p7=$reg['imagem'];
}
if($i==8){
	$p8=$reg['preco'];
	$p8=$reg['imagem'];
}
i$=$i+1;
}
?>
<?php
function 	Carrega(){
	global $qtd;
	$qnt=$_POST
}