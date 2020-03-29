<?php
class calculo{
	var $res;
	var $n1;
	var $n2;
	function setn1($n1){
		$this->n1=$n1;
	}
	function setn2($n2){
		$this->n2=$n2;
	}
	function soma(){
		$this->res=$this->n1+$this->n2;
	}
	function getres(){
		return $this->res;
	}
	function sub(){
		$this->res=$this->n1 - $this->n2;	
	}
	function mult(){
		$this->res=$this->n1*$this->n2;
	}
	function div(){
		$this->res=$this->n1/$this->n2;
	}
}
?>