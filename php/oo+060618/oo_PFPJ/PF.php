<?php
include("Cliente.php");
 class PF extends Cliente {
 private $escolaridade;
  private $sal;
   private $nome;
  public function setEscolaridade($escol){
    $this->escolaridade=$escol;
}
  public function getEscolaridade(){
  return $this->escolaridade;
}
 public function setSal($sal){
    $this->sal=$sal;
	
}
public function getSal(){

  return $this->sal;
}
 function setNome($nome){
    $this->nome=$nome;
}
public function getNome(){
  return $this->nome;
}
 }
 ?>