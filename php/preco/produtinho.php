<?php
$desc=$_POST["tDescr"];
$preco=$_POST["tPreco"];
$icms=$_POST["tIcms"];
$origem=$_POST["tOrigem"];
$taxa=$_POST["tTaxa"];
$btn=$_POST["btn1"];


if ($btn=="Nacional"){
include ("nacional.php");	
  $nacional  =new Nacional(); // aqui instancio a classe
  $nacional->setDesc($desc);
  $nacional->setPreco($preco);
  $nacional->setIcms($icms);
  

  
  print ("Nome  " . $nacional->getDesc()."<br>");
  print ("Preco  " . $nacional->getPreco()."<br>");
 print ("Preço Final  R$" .($nacional->getPreco()+($nacional->getPreco()*($nacional->getIcms()/100))) );
  }
 if ($btn=="Importado"){
	include ("importado.php");
  $impo  =new Importado(); // aqui instancio a classe
  $impo->setOrigem($origem);
  $impo->setTaxa($taxa);
  $impo->setPreco($preco);
  

  
  print ("País de Origem  " . $impo->getOrigem()."<br>");
  print ("Preço R$ " . $impo->getPreco()."<br>");
 print ("Preço Final  R$" .($impo->getPreco()+($impo->getPreco()*($impo->getTaxa()/100))) );

  }

?>