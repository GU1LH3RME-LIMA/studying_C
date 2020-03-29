<?php
|include ("calculo.php");//arquivo da classe 
$n1=$_POST['tN1'];
$n2=$_POST['tN2'];
$BTN=$_post['btn1'];
$umcalculo=new calculo();//aqui instancio a classe
$umcalculo->sent1($n1);
$umcalculo->sent2($n2);
$perador="";
if($btn=="soma"){
	$umcalculo->soma();
	$result=$umcalculo->getres();
	//print $n1."+".$n2."=".$result;
	$perador="+";
}
else 
if($btn=="sub"){
	$umcalculo->sub();
	$result=$umcalculo->getres();
	//print $n1."-".$n2."=".$result;
	$perador="-";
}

if($btn=="div"){
	$umcalculo->div();
	$result=$umcalculo->getres();
	//print $n1."/".$n2."=".$result;
	$perador="x";
}
?>
<?php include("exibe.php");?>