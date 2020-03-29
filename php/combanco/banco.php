<html>
<body>
<form name="frmEntrada" action="funcao.php" method="get">
<table border="2" bordercolor="red">
<tr>
<td>Matricula</td>
<td>Aluno</td>
<td>Nome do Pai</td>
<td>Nome da Mãe</td>
<td>CPF</td>
<td>Telefone</td>
<td>Renda</td>
</tr>
<td><input type="text" name="tMat" value=<?php if(isset($_SEESION['matr'])==true) echo $_SEESION['matr'];?>></td>
<td><input type="text" name="tNome" value=<?php if(isset($_SEESION['nome'])==true) echo $_SEESION['nome'];?>></td>
<td><input type="text" name="tMae" value=<?php if(isset($_SEESION['mae'])==true) echo $_SEESION['mae'];?>></td>
<td><input type="text" name="tPai" value=<?php if(isset($_SEESION['pai'])==true) echo $_SEESION['pai'];?>></td>
<td><input type="text" name="tCpf" value=<?php if(isset($_SEESION['cpf'])==true) echo $_SEESION['cpf'];?>></td>
<td><input type="text" name="tTel" value=<?php if(isset($_SEESION['tel'])==true) echo $_SEESION['tel'];?>></td>
<td><input type="text" name="tRenda" value=<?php if(isset($_SEESION['renda'])==true) echo $_SEESION['renda'];?>></td>
</tr>
<tr>
<td><input type="submit" name="btn1" value="Incluir"></td>
<td><input type="submit" name="btn1" value="Alterar"></td>
<td><input type="submit" name="btn1" value="Excluir"></td>
<td><input type="submit" name="btn1" value="Consultar"></td>
<td><input type="reset" name="btn1" value="Limpar"></td>
</tr>
</table>
</body>
</html>
