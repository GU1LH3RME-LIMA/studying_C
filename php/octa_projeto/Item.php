<?php
// include_once "dbConexao.php";
   //iniciamos nossa sessao que vai indicar o usuario pela session_id session_start();
  class Item { 
     var $id;
     var $placa;
     var $modelo;
     var $aluguel;
    // var $cliente;
     var $sessao;
      //include "dbConexao.php";
      //usado para ler (SELECT) alunos do banco 
     var $itens = array();
      //a variavel dentro dos parenteses é uma variavel local
       function setId($i) {
         $this -> id =$i;
       }
	   function getId() {
          return $this -> id;
       }
       function setPlaca ($c) {
          $this -> placa =$c;
       }
       function setModelo ($n) {
          $this -> modelo =$n;
       }
       function setAluguel($p) {
          $this -> aluguel =$p;
       }
       function setSessao ($s) {
          $this -> sessao =$s;
       }
       function getPlaca() {
          return $this -> placa;
       }
       function getModelo() {
          return $this -> modelo;
       }
       function getAluguel() {
          return $this -> aluguel;
       }  
       function getSessao() {
          return $this -> sessao;
       }
       function getItens() {
          return $this -> itens;
       }
       function calcularId() {
         //include "dbConexao.php";
          $mysqli= mysqli_connect("10.0.0.3", "aluno", "aluno", "alugaCarro");
          $sql = "Select codal from aluguel order by codal desc limit 1";
             //$resultado = "$conexao -> executarSQL($sql);
          $resultado = mysqli_query($mysqli, $sql);
          $numregs = mysqli_num_rows($resultado);
           if($numregs == 0) {
             //é o 1° item 
             $this ->setId(1);
            }
            else{
              $registro = mysqli_fetch_array($resultado);
              $this -> setId($registro['codal'] +1);
            }
            //$conexao -> closeBanco();
       }
       function incluir() {
         $mysqli = mysqli_connect("10.0.0.3", "aluno", "aluno", "alugaCarro");
          //$conexao = new Conexao();
         $sql = "Insert into aluguel values(".$this -> getId()." ,
          ' ".$this -> getPlaca()." ' ,
           ' ".$this -> getModelo()." ' ,
            ".$this -> getAluguel()." ,
             ' ".$this -> getSessao(). " ')";
             //$conexao -> executarSQL($sql);
         mysqli_query($mysqli, $sql);
             //$conexao -> closeBanco();
       } //fim da funcao incluir
       function remover ($placa) {
        $mysqli = msqli_connect("10.0.0.3", "aluno", "aluno", "alugaCarro");
           //$conexao = new Conexao();
        $sql = "Delete from aluguel where placa = ' ".$placa." ' ";
          //$conexao -> executarSQL($sql);
        mysqli_query($mysqli, $sql);
           //$conexao -> closeBanco();
        } //fim da funcao remover
        function excluirItem() {
            //apaga todos os registros para se iniciar uma nova compra 
            //$onexao = new Conexao();
          $mysqli = mysqli_connect("10.0.0.3", "aluno", "aluno", "alugaCarro");
          $sql = "Delete from aluguel";
          mysqli_query($mysqli, $sql);
        }        
        // listar todos os itens de uma determinada sessao armazenados no banco
        
        function listaItens() {
       
             /* troquei o session_id(0 pelo valor padrao 0 */
            $i = 0;
            $sql = "select * from aluguel where sessao ='0' order by modelo asc";
           // $resultado = mysqli_query($mysqli, $consulta);
   
	
	       $mysqli= mysqli_connect("10.0.0.3", "aluno", "aluno", "alugaCarro");
          $sql = "Select * from aluguel order by modelo";
             //$resultado = "$conexao -> executarSQL($sql);
          $resultado = mysqli_query($mysqli, $sql);
          $numregs = mysqli_num_rows($resultado);
           if($numregs == 0) {
             //é o 1° item 
             $this ->setId(1);
            }
            else{
             while($registro = mysqli_fetch_array($resultado)) {
             
				$objeto = new Item();
				$objeto->setPlaca($registro["placa"]);
                print $registro['modelo']; 
				$objeto->setModelo($registro["modelo"]);
				$objeto->setAluguel($registro["aluguel"]);
                print "alugaaaa ".$registro["aluguel"];
				$objeto->setSessao($registro["sessao"]);
				$this->itens[$i]=$objeto;
                                $i++;}
			//fim do for
			print "sqllll ".$i;
			}
			
return $i;
	
	}
}
	?>                      
           
		   
