<html>
<body bgcolor="grey yellow">
<form name="frm1" action="Cliente.php" method="post">
<center><font color="red"><bold>
<h1>
Calculadora</h1></center></font></bold>
<font size="14" color="blue">
<table border="2" bordercolor="green" align="center" bgcolor="plum">
<tr>
<td width="100" align="center">
<?php print("Operando 1");?>
</td>
<td width="25" align="center">
<?php print("Sinal");?>
</td>
<td width="100" align="center">
<?php print("Operando 2");?>
</td>
<td width="25" align="center">
<?php print(" ");?>
</td>
<td width="25" align="center">
<?php print(" ");?>
</td>
<td width="100" align="center" FONT FACE="Arial, helvetica, sans-serif" size="2">
<?php print("Resultado");?>
</td>
</tr>
<tr>
<td width="100" align="center">
<?php print($n1);?>
</td>
<td width="25" align="center">
<?php print($perador);?>
</td>
<td width="100" align="center">
<?php print($n2);?>
</td width="25">
<td widht="25" align="center">
<?php print("=");?>
<td width="100" align="center" FONT FACE="Arial, helvetica, sans-serif" size="2">
<?php print($result);?>
</td>
</tr>
</table>
</font>
<br>
<br>
<input type="submit" value="Voltar" name="btn1"/>
</form>
</body>
</html>