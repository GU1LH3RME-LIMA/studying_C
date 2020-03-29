<html>
<head>
</head>
<body>
<?php
$frutas[0]="laranja";
$frutas[1]="banana";
$frutas[2]="mamão";
$frutas[3]="morango";
$frutas[4]="kiene";
$frutas[5]="abacate";
$achou=false;
function pesquisa($frutas,$proc){
global $achou;
$i=0;
$achou=false;
while($i<=5 and $achou==false){
	if($frutas[$i]==$proc)
		$achou=true;
	else
		$i=$i+1;
}
if($achou==false)
	print($proc." não existe no vetor!");
	
else
	print($proc." na posição: ".$i);

}
$proc="morango";
pesquisa($frutas,$proc);
?>
</body>
</html>