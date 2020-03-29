<?php


$nome=$_GET['tNome'];
$data=$_GET['tData'];
$email=$_GET['tEmail'];
$senha=$_GET['tSenha'];
$senha2=$_GET['tSenha2'];

$bt=$_GET['btn1'];
// separando yyyy, mm, ddd
    list($ano, $mes, $dia) = explode('-', $data);

    // data atual
    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    // Descobre a unix timestamp da data de nascimento do fulano
    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);

    // cálculo
    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
function conecta() {
	$conexao = mysqli_connect('localhost', 'root', '', 'usuario');
	
	return $conexao;
}

function inserir($conexao, $query) {
	if(mysqli_query($conexao, $query)) {
		print (" Você está cadastrado(a) com sucesso<br>");
	}
	else 
		print "erro ". mysqli_error($conexao);
}


$con=conecta();	

if($bt=="Cadastrar"){
	$query = "insert into pessoa(nome,ano_nasc,email,senha) values ('{$nome}',";
	$query=$query."'{$data}','{$email}','{$senha}')";
	
	if($idade<18){
	echo	"<script type=\"text/javascript\">alert('É necessario ser maior de 18 para se cadastrar!!!');</script>";}
	else
	if($senha!=$senha2){
	
echo	"<script type=\"text/javascript\">alert('Erro ao confirmar senha!!!');</script>";

	}
	
else{
	inserir($con,$query);

}

}

		
?><?php include("formulario.php");?>