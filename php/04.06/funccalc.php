<?php
include("calculo.php");//arquivo da classe
$n1=$_POST['tOp1'];
$n2=$_POST['tOp2'];
$btn=$_POST['btn1'];
$umcalculo=new calculo(); //aqui instancio a classe
$umcalculo->setn1($n1);
$umcalculo->setn2($n2);
$perador=" ";
global $result;
	if($btn=="Soma"){
		
		$umcalculo->soma();
		$result=$umcalculo->getres();
		print $n1."+".$n2."=".$result;
		$perador="+";
	}else
		if ($btn=="Subtração"){
			$umcalculo->sub();
			$result=$umcalculo->getres();
			//print $n1."-".$n2."=".$result;
			$perador="-";
		}
		if($btn=="Divisão"){
			$umcalculo->div();
			$result=$umcalculo->getres();
			//print $n1."/".$n2."=".$result;
			$perador="/";
		}
		if($btn=="Multiplicação"){
			$umcalculo->mult();
			$result=$umcalculo->getres();
			//print $n1."*".$n2."=".$result;
			$perador="X";
		}
		?>
		<?php include("exibe.php"); ?>
		
		