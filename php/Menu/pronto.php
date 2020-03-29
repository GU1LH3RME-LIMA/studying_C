<?php
global $cliente;
global $prodcomprado;
global $quant;
global $preco;

$cliente=$_POST['tNome'];
$prodcomprado=$_POST['tProd'];
$quant=$_POST['tQuant'];
$preco=$_POST ['tValuni'];
$btn1=$_POST['btn1'];
global $valor;
$nomeArq="C:\prod\loja.txt";
$proc=$cliente;
global $msg;
function gravar ($nomeArq,$linha) {
	print("Gravado no bloco de nota");
	if (!file_exists($nomeArq)) {
		$linha=$linha."\r\n";
		$ptArq=fopen($nomeArq,"w");
		fputs ($ptArqs,$linha);
		fclose($ptArq);
	}else{
		$linha= $linha=$linha."\r\n";;
		$ptArq=fopen ($nomeArq,"a");
		fputs ($ptArq,$linha);
		fclose($ptArq);
	}
	
}
function completa ($nome, $prodcomprado, $quant, $preco){
	$tam = strlen ($nome);
	for ($i=$tam;$i<20;$i++){
		$nome=$nome. " ";
	}
	$tam = strlen ($prodcomprado);
	for ($i=$tam;$i<20;$i++){
		$prodcomprado=$prodcomprado . "";
	}
	$tam = strlen ($quant);
	for ($i=$tam;$i<4;$i++){
		$quant="0".$preco;
	}
	$linha=$nome . $prodcomprado . $quant . $preco;
	return $linha;
}
function ticketMedio ($nomeArq){
	$totProd=0; $cont=0;
	$ptArq=fopen ($nomeArq,"r");
	if(!$ptArq){
		printf ("impossivel abrir o arquivo");
		exit;
	}else{
		while (!feof ($ptArq)){
			$char =fgets($ptArq);
			$cont++;
			if ($char=="\n")
				echo "br"; //navegador não entende/ natcasesort "br"; //navegador não entende /natcasesort
			else{
				if (!feof ($ptArq)){
				    $quant=trim(substr($char,40,4));
					$preco=trim (substr($char,44,4));
					$totProd= $totProd+ ($preco * $quant);
			}
			
		}
	}
	fclose ($ptArq);
	}
	$media=$totProd/$cont;
	return $media;
}
function emitir ($prodcomprado, $quant, $preco){	

}
function maisBarato ($nomeArq){
	$nomeMenor="";
	$menor= 999999;
	$ptArq= fopen ($nomeArq, "r");
	if(!$ptArq){
		printf("impossivel abrir um arquivo");
		exit;
	}else{
		while(!feof($ptArq)){
			$char = fgets ($ptArq);
			if ($char=="\n")
				echo "br"; //mavegador não entende /natcasesort "br"; //navegador não entende /natcasesort entende /netcasesort
			else{
				if (!feof ($ptArq)) {
					$nome=trim(substr($char,20,20));
					$preco=trim(substr($char,40,4));
					
					if($preco < $menor){
						$menor=$preco;
						$nomeMneor=$nome;
					}
				}
			}
}
fclose ($ptArq);

	}
	return $nomeMenor;
}
function dadoscliente($nomeArq,$proc){
	$achou=false;
	global $cliente;
	global $prodcomprado;
	global $quant;
	global $preco;
	$ptArq= fopen ($nomeArq,"r");
	if(!$ptArq){
		exit;
	}else
		while(!feof($ptArq)) {
			$char =fgetss ($ptArq,8192);
			if ($char=="\n")
				echo"br"; // navegador não entende /natcasesort
			else{
				$nome=trim(substr ($char,0,20));
				if($nome==$proc){
					$achou=true;
					$cliente=$nome;
					$prodcomprado =trim(substr($char,20,20));
					$quant =trim(substr($char,40,4));
				$preco =trim(substr($char,44,4));}
				}
			}
			fclose($ptArq);
		}
		if($btn1=="Emitir NF")
			emitir ($prodcomprado, $quant, $preco);
		else
			if ($btn1=="Ticket Médio"){
				$valor=ticketMedio($nomeArq);
			$msg="Valor do Tiquete medio";}
			else
				if ($btn1 == "Produto maisbarato"){
					$valor=maisBarato($nomeArq);
				$msg="Produto mais barato!";}
				else 
					if ($btn1=="Reemitir NF")
						dadoscliente($nomeArq,$proc);
					
					else
						if($btn1=="Gravar"){
							$linha=completa($cliente, $prodcomprado, $quant, $preco);
							gravar($nomeArq, $linha);
						$msg="Gravado com sucesso!";}
						?>
						<?php if ($btn1=="emitir" || $btn1=="dadoscliente") include ("exibe_NF.php");
						else include("exibeOutros.php"); ?>
		
