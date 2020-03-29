<?php
include("Pessoa.php");
$p1 = new Pessoa();
$p1->nome = "José da Silva";
$p1->altura = 1.82;
$p1->nascimento = "1989-01-22";
$p1->salario = 3600;
//executando o método
$p1->MostrarPessoa();
?>