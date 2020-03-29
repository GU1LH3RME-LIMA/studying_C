 <?php
 
class Funcionario {
 private   $Id;
  private   $Nome;
  private   $Nascimento;
  protected $Salario;
 
 function setSalario($Salario){
 
   if (is_numeric($Salario) && $Salario > 0)
   {
      $this->Salario = $Salario;
   }
 
 }
  function setNome($Nome){
 
        $this->Nome=$Nome;
   }
 function getSalario(){
 
   return $this->Salario;
 
 }
 function getNome(){
 
   return $this->Nome;
 }
   function setNascimento($Nasc){
 
        $this->Nascimeto=$Nasc;
   }
 function getNascimento(){
  return  $this->Nascimeto;
 
}
 }
?>