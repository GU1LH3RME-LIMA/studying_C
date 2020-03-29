<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Brecho de coisas</title>
</head>
<body>
<center>
  <font size="6" face="Verdana, Geneva, sans-serif"><i>Minha Lojinha</i></font></center>
  <div align="center">
  <div align="center"><img src="imagens/locadora1.jpg" width="400" height="130"/></div>
  </div>
  <img src="cadeira.jpg" width="100" height="70"/>
  <br/>
  <a href="controle.php?prod1"><?php echo $_SESSION['prod1'];?></a>  <br/>
  <a href="controle.php?prod1&acao=incluir"><br/>
  <img src="add_carrinho.jpg" border="0"/></a>
  <br/>
  <img src="mochila.jpg" width="100" height="70"/>
  <br/>
  <a href="controle.php?placa=BBC-4567&acao=incluir"><?php echo $_SESSION['prod2'];?></a>  <br/>
  <a href="controle.php?placa=BBC-4567&acao=incluir"><br/>
  <img src="add_carrinho.jpg" border="0"/></a>
  <br/>
  <img src="caneca.jpg" width="100" height="70"/>
  <br/>
  <a href="controle.php?placa=DEF-1234&acao=incluir"><?php echo $_SESSION['prod3'];?></a>  <br/>
  <a href="controle.php?placa=DEF-1234&acao=incluir"><br/>
  <img src="add_carrinho.jpg" border="0"/></a>
  <br/>
  <img src="pipoca.jpg" width="100" height="70"/>
  <br/>
  <a href="controle.php?placa=XYZ-4321&acao=incluir"><?php echo $_SESSION['prod4'];?></a>  <br/>
  <a href="controle.php?placa=XYZ-432&acao=incluir"><br/>
  <img src="add_carrinho.jpg" border="0"/></a>
  <br/>
  
</body>
</html>