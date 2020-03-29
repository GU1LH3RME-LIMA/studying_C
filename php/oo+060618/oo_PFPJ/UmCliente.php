<?php

//include ("Cliente.php");
include ("pf.php");
$id=$_POST["tId"];
$nome=$_POST["tNome"];
$sal=$_POST["tSal"];
$escol=$_POST["tEscol"];
$ende=$_POST["tEnde"];
$tel=$_POST["tTel"];
$btn=$_POST["btn1"];

if ($btn=="Carregar"){

  $PF  =new PF(); // aqui instancio a classe
  $PF->setNome($nome);
  $PF->setSal($sal);
  $PF->setEndereco($ende);
  $PF->setEscolaridade($escol);

  $PF->setTel($tel);
  print "Nome  " . $PF->getNome()."<br>";
  print "Escolaridade  " . $PF->getEscolaridade()."<br>";
  print "Salario " . $PF->getSal()."<br>";
  print "Endereço  " . $PF->getEndereco()."<br>";
  
}
?>