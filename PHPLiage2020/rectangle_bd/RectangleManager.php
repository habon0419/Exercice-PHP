<?php
require_once("./Manager.php");

class RectangleManager extends Manager{

     function __construct(){
         $this->tableName="Rectangle";
     }

     public function add($objet){
      $sql="insert into  $this->tableName (longueur) values(".$objet->getLongueur().")";
         
      return  $this->executeUpdate( $sql)!=0;

      $sql="insert into  $this->tableName (largeur) values(".$objet->getLargeur().")";
      
       return  $this->executeUpdate( $sql)!=0;
      
       
       

    }
    public function update($objet){

    }
    public  function delete($id){
       $sql="delete from $this->tableName where id=$id";
       return  $this->executeUpdate( $sql)!=0;
    }
    public function findAll(){
       $sql="select * from  $this->tableName";
       return $this->executeSelect($sql);
    }
    public function findById($id){

    }
    }