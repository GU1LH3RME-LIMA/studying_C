<?php
$Nome = $_POST['TNome'];
$Renda = $_POST['TRenda'];
	function calcular($Renda, $Nome){
		$Imposto= 0;
		if ($Renda <=5000) 
		$Imposto = 0; 
	      else 
		if ($Renda <=15000)
			$Imposto = ($Renda * 10)/100;
		else
			if ($Renda <=25000)
			$Imposto = ($Renda * 20)/100;
		else
			$Imposto = ($Renda * 30)/100;
		
		print("<Font color = 'Black' size = '12'> Nome:  </Font> <Font color = 'Red' size = '14'>" .$Nome. " </Font> <br>");
		print("<br>");	
		print("<Font color = 'Black' size = '12'> Imposto a pagar:  </Font> <Font color = 'Red' size = '14'>" .$Imposto. " </Font> <br>");		
			
	}
		
	calcular($Renda, $Nome);	
?>