<html>
<head>
</head>
<body>
<form name="frm1" method="GET" action="cad.php">
Nome Completo: 
<input type="text" name="tNome" value=<?php if(isset($_SEESION['nome'])==true) echo $_SEESION['nome'];?>>
<br>
Data de Nascimento:
<input type="date" name="tData" value=<?php if(isset($_SEESION['data'])==true) echo $_SEESION['data'];?>>
<br>
E-Mail:
<input type="email" name="tEmail" value=<?php if(isset($_SEESION['email'])==true) echo $_SEESION['email'];?>>
<br>
Senha:
<input type="password" name="tSenha" maxlength="12" value=<?php if(isset($_SEESION['senha'])==true) echo $_SEESION['senha'];?>>
<br>
Confirmar Senha:
<input type="password" name="tSenha2" maxlength="12"/>
<br>
<input type="radio" name="gender" value="male" checked> Li e concordo com os termos de compromisso<br>
<br>
<input type="submit" name="btn1" value="Cadastrar"/>

</form>
</body>
</html>