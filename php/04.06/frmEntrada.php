<html>
<head>
<title>Entrada de dados</title>
</head>
<body>
<form name="frmEntrada" method="post" action="funccalc.php">
<! method pode ser post ou get action= ação, script ou página para onde quer ir. está ligado ao botão com type submit.
ao clicar no botão, o controle irá para a página em action: em seguida vem os objetos que irão compor o form: caixa de text, botões, radio, etc >
Operando 1 <br>
<input type="numberformat" name="tOp1"/>
<br>
Operando 2 <br>
<input type="numberformat" name="tOp2"/>
<br>
<input type="submit" name="btn1" value="Soma"/>
<! os tipos = type possiveis para o botão são: button, reset(para limpar as caixas)e submit >
<input type="submit" name="btn1" value="Subtração"/>
<input type="submit" name="btn1" value="Divisão"/>
<input type="submit" name="btn1" value="Multiplicação"/>
<input type="submit" name="btn2" value="Limpa"/>
</form>
</body>
</html>