<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>
<body>
<?php

class Carro{
	var $placa;
	var $modelo;
	var $img;
	var $aluguel;

// usado para ler (SELECT) alunos do banco
var $carros = array();

// a variável dentro dos parênteses é uma cariavel local
function setPlaca ($c){
	$this -> placa = $c;
}
function setModelo($d){
	$this -> modelo = $d;
}
function setImg($i){
	$this -> imagem = $i;
}
function setAluguel($a){
	$this -> aluguel = $a;
}
function getModelo(){
	return $this -> modelo;
}
function getPlaca(){
	return $this -> placa;
}
function getImg(){
	return $this -> imagem;
}
function getAluguel(){
	return $this -> aluguel;
}
function getCarros(){
	return $this -> carros;
}
function listaCarros(){
	$objeto_con = new Conexao();
	$consulta = "SELECT * FROM carroI ORDER BY modelo";
	$resultado = $objeto_con -> executarSQL($consulta);
	$numregs = mysqli_num_rows($resultado);
	if ($numregs > 0){
		for ($i=0;$i<$numregs;$i++){
			$objeto = new Carro();
			$objeto -> setPlaca($registro["placa"]);
			$objeto -> setModelo($registro["modelo"]);
			$objeto -> setAluguel($registro["aluguel"]);
			$this -> carros[$i] = $objeto;
		}
	}
	return $numregs;
	 }
}
	?>

?>
</body>
</html>