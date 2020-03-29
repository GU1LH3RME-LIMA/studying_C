<htm>
<head>
<title> Nota Fiscal</title>
</head>
<body>
<center><h1>
Nota Fiscal</h1></center>
<center>
<h3>Cliente<font color="red"><?php
print(" :     ". $cliente);
?></center></h3></font>
<Table border="5" bgcolor="#fffff" align="center" width="350" height="90" valign="middle" >
<tr>
<td align="center" valign="middle">
Produto
</td>
<td>
Quantidade
</td>
<td>
Preço
</td>
<td>
Valor da Compra
</td>
</tr>
<tr>
<td>
<?php print $prodcomprado;?>
</td>
<td align="center" valign="middle"><?php print $quant; ?>
</td>
<td align="center" valign="middle"><?php print($preco);?>
</td>
<td align="center" valign="middle">
<?php print($preco*$quant);?>
</td>
</tr>

</table>
</body>
</html>