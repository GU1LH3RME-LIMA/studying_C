<html>
<head>
</head>
<body>
<?php
$nome=$_POST['Tnome'];
$op1=$_POST['Tsalario'];
$btn=$_POST['btncalc'];
function calcular($op1,$nome){
	
	$novosalario=0;
	if($op1<=5000){
	$novosalario=$op1+($op1*0.15);
$reajuste=$op1*0.15;}
	
	

	else
	if($op1>5000 && $op1<=15000 ){
	$novosalario=$op1+($op1*0.12);
$reajuste=$op1*0.12;}
	
	
		else
	if($op1>15000){
	$novosalario=$op1+($op1*0.10);
	$reajuste=($op1*0.10);
	}
	
	print($nome." seu antigo salario era de R$".$op1." recebendo assim um reajuste de R$".$reajuste." portanto seu novosalario é de R$".$novosalario);
}
calcular($op1,$nome);
		?>
	</body>
	</html>