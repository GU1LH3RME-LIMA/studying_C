<?php
Class Pessoa{
 
   public $nome;
   public $altura;
   public $nascimento;
   public $salario;
 
   public function MostrarPessoa(){
     echo "Nome: ".$this->nome;
     echo "Altura: ".$this->altura;
     echo "Nascimento: ".$this->nascimento;
     echo "Salario: ".$this->salario;
   } 
}
?>