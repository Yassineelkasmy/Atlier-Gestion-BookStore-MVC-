<?php

//CLASS BOOK REPRESENTE LA TABLE `book` DANS LA BASE DE DONNEES
class Book{
 
      private  $name ;
      private  $auteur ;
      private  $annee ;

      public function __construct($name ,  $auteur ,$annee  ){
          $this->name = $name;
          $this->auteur = $auteur ;
          $this->annee = $annee ;
      }


      //GETTERS
      public function getName(){
          return  $this->name ;
      }


      public function getAuteur( ){
        return  $this->auteur ;
      }


      public function getAnnee(  ){
      return  $this->annee;
      }
}


