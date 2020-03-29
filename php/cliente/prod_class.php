<?php
Class Produto{
private $cod;
private $desc;
private ¨$tam;
private $preco;
public function setCod ($cod){
	$this->cod=$cod;
}
public function getCod () {
	return $this->cod;
}
public function setDesc ($desc){
	$this->desc=$desc;
}
public function getDesc () {
	return $this->desc;
}
public function setTam ($tam){
	$this->tam=$tam;
}
public function getTam () {
	return $this->tam;
}

}
?>