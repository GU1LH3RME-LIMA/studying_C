<?php
include ("prod_class.php");
class Importado extends Produto{
	private $origem;

	private $taxa;
public function setOrigem ($origem){
	$this->origem=$origem;
}
public function getOrigem () {
	return $this->origem;
}

public function setTaxa ($taxa){
	$this->taxa=$taxa;
}
public function getTaxa () {
	return $this->taxa;
}



}
?>	
	