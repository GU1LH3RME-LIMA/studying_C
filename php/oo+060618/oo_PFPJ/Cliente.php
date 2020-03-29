<?php
class Cliente {
 public $id;
 public $endereco;
 public $tel;
 
 public function setId($id){
   $id=$id;
   }
 public   function getId(){
    return  $this->id;
   }
 public   function setEndereco($ende){
    $this->endereco=$ende;
   }
  public  function getEndereco(){
    return  $this->endereco;
   }
  public function setTel($tel){
     $this->tel=$tel;
   }
  public  function getTel(){
    return  $this->tel;
   }
   }   
 
   ?>