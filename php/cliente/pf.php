<?php
include ("cliente.php");
class Pf extends Clinte{
	private $nome;
	private $esco;
	private $sal;

public function setNome ($nome){
	$this->nome=$nome;
}
public function getNome(){
	return $this->nome;
}
public function setEsco ($esco){
	$this->esco=$esco;
}
public function getEsco(){
	return $this->esco;
}
public function setSal ($sal){
	$this->sal=$sal;
}
public function getSal(){
	return $this->sal;
}
}
?>