<?php
include ("prod_class.php");
class Nacional extends Produto{
	private $estado;

	private $icms;
public function setEsta ($estado){
	$this->esta=$estado;
}
public function getEsta () {
	return $this->esta;
}

public function setIcms ($icms){
	$this->icms=$icms;
}
public function getIcms () {
	return $this->icms;
}



}
?>	
	
