<?php
include("Funcionario.php");
$junior = new Funcionario();
$junior->setSalario(300);
$junior->setNome("Octa");
$junior->setNascimento("11/03/1958");
echo "O salario é: ".$junior->getSalario()."<br>";
echo "O nome é: ".$junior->getNome()."<br>";
echo " a data de nascimento e". $junior->getNascimento()

?>