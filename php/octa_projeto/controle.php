<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>
<body>
<?php
//
include_once "Carros.php";
include_once "Item.php";
//exibirTelaLocação
function exibirTelaLocacao(){
	header("Location:Minhatela_locacao.php");
}

function incluirItem($modelo, $aluguel) {
	$objItem = new Item();
	$objItem -> calcularID(); //calcula e insere na classe<br />
    $objItem -> setPlaca ($_GET['placa']);
	$objItem -> setModelo($modelo); //pega o valor ja inserido em Carro
	$objItem -> setAluguel($aluguel); //pega o valor já inserido em carro
	$objItem -> setSessao(0);
	$objItem -> incluir();
	exibirTelaLocacao();
}

function incluirCarro() {
	$carro = new Carro();
	switch($_GET['placa']) {
		case "ABC-1234": $carro -> setPlaca($_GET['placa']);
		$carro -> setModelo("Doble");
		$carro -> setAluguel(80);
		$carro -> setImg("carro1.jpg");
		break;
		case "BBC-4567": $carro -> setPlaca($_GET['placa']);
		$carro -> setModelo("Celta");
		$carro -> setAluguel(60);
		$carro -> setImg("carro2.jpg");
		break;
		case "DEF-1234": $carro -> setPlaca($_GET['placa']);
		$carro -> setModelo("Siena");
		$carro -> setAluguel(70);
		$carro -> setImg("carro3.jpg");
		break;
		case "XYZ-4321": $carro -> setPlaca($_GET['placa']);
		$carro -> setModelo("Fusion");
		$carro -> setAluguel(100);
		$carro -> setImg("carro4.jpg");
		break;
	}
	incluirItem($carro->getModelo(), $carro->getAluguel());
}

function excluirItem() {
	$objItem = new Item();
	$objItem -> remover($_GET['placa']);
	exibirTelaLocacao();
}

function encerrarCompra() {
	$objItem = new Item();
	header ("Location:EncerraVenda.php");
	$objItem -> excluirItem();
	}
	


switch ($_GET['acao']) {
	case "incluir": incluirCarro();
	break;
	case "excluir": excluirCarro();
	break;
	case "encerrar": encerrarCompra();
	break;
}
	
	

?>
</body>
</html>