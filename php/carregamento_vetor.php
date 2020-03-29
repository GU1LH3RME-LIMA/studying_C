<html>
<head>
</head>
<body>
<?php
$emp[0]="casa e loja";
$emp[1]="loja a";
$emp[2]="lasa";
$emp[3]="sempre viva";
$emp[4]="coisa e tal";
$emp[5]="sempre loja";
 $fat[0]=200000;
 $fat[1]=150000;
  $fat[2]=250000;
   $fat[3]=50000;
    $fat[4]=70000;
	 $fat[5]=60000;
	function maiorfat($emp,$fat){
		$i=0;
		$maior=$fat[0];
		$maioremp=$emp[0];
		for($i=0;$i<=5;$i++)
		if($fat[$i]>$maior){
		$maior=$fat;
		$maiornome=$emp[$i];
		}
		print("empresa de maior faturamento <font color='red' size='12'>".$maiornome."</font>");
	}
	function fattotal(){
	global $fat;
	$total=0;
	for($i=0;$i<6;$i=$i+1){
		$total=$total+$fat[$i];
	}
	print ("<br> faturamento total ". $total);
return $total;
	}
Function mediag($total){
	$med=$total/6;
	print("<font color ='blue' size ='10'>faturamento medio </font><font size ='12' color='green>".$med."</font>" );
}
 function abaixomed($med){
global $emp;
global $fat;
$i=0;
while($i<6)
	if($fat<$med){
	print("<font size='10' color='green'>empresa abaixo da media </font> <font color='blue' size='12'>".$emp."</font>")	;
	
}

 }
 maiorfat($emp,$fat);
 fattotal();
 mediag();
 abaixomed($med);
?>
</body>
</html>

