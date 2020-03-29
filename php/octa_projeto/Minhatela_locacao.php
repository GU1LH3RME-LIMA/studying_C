<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loca��o de Carro</title>
<style type="text/css">

.estilo3 {font-size:10px; font-family:Verdana, Arial, Arial, Helvetica, sans-serif;}
.estilo4 {color:#FF0000; font-weight:bold;}
</style>
</head>
<body>
<div align="center"><img src="Sistema_carro/imagens/mercado.jpg" width="400" height="130"/>
</div>
<center>

<form action="" method="get">
<table width="60%" border="1" cellspacing="0" cellpadding="0">
<tr>
 <th width="15%" scope="col">Produto</th>
 <th width="15%" scope="col"></th>
 <th width="15%" scope="col">Preco(por dia)</th>
 <th width="15%" scope="col">&nbsp;</th>
</tr>

<?php
include "ItemDao.php";

$objeto = new itemDao();

$qtd_locacao = $objeto->listaItens();
$itens = $objeto->itens;
$totalLocacao=0;
//verifica se existe item para ser exibido na locacao
if ($qtd_locacao>0){
 for ($i = 0;$i<count($itens);$i++){
    Pega um item do array;
    $item = $itens[$i];
	
    $totalLocacao += $item->preco * quant;
	?>
<tr>
 <td><div class="estilo3"><?php print $item->descricao;?></div></td>
 <td><div align="center" class="estilo3"><?php print $item->preco;?></div></td>
 <td><div align="center" class="estilo3"><?php print number_format($item->PrecoItem,2,",",".");?></div></td>
 <td><div align="center"><a href="controle.php?codProd=<?php print $item->codProd ?>&acao=excluir">
 <img src="imagens/del_carrinho.jpg" width="110" height="21" border="0" /></a></div></td>
 </tr>
<?php
   }//fim do for
  }//fim do if
 $_SESSION['total']=$totalLocacao;
?>
 <tr>
  <td colspan="2">
  <div align="right"><strong>TOTAL: </strong>&nbsp;</div>
  </td>
  <td><div align="center" class="estilo3 estilo4">
  <?php print  number_format($totalLocacao,2,",","."); ?></div></td>
  <td>&nbsp;</td>
  </tr>
  <tr>
  <td colspan="4">
   <table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr>
    <th width="50%" height="60" scope="col">
    <a href="Minhatela_escolha_carro.php"><img src="imagens/comprando.jpg" width="287" height="40" border="0"/>
    </a>
    </th>
    <th width="50%" scope="col">
    <a href="controle.php?acao=encerrar&total=<?php echo $totalLocacao; ?>"><img src="imagens/pagar.jpg" width="287" height="40" border="0"/></a>
    </th>
    </tr>
    </table>
    </td>
    </tr>
    </table>
  </form>
 </center>
</body>
</html>
