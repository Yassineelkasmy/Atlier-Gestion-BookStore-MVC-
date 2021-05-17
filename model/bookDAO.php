<?php
require_once "book.php";

class BookDAO{
  private $bdd;
  
  public function __construct(){
      try
      {
        $this->bdd    = new PDO('mysql:host=localhost;dbname=gbook;charset=utf8', 'root', '');
      }
      catch(Exception $e) {
          die('Erreur : '.$e->getMessage()); 
      }      
  }

  public function save($book){

      $req = $this->bdd->prepare('INSERT INTO book(nom, auteur, annee ) VALUES(:name, :auteur, :annee)');
    
      $req->execute(array( 'name' => $book->getName(),
      'auteur' => $book->getAuteur(),
      'annee' => $book->getAnnee()
      ));
      
      header('Location: http://localhost/testlsi/index.php?action=book');
  }


  public function delete($name){
      $req=$this->bdd->prepare("DELETE FROM book WHERE nom=:name");
      $req->execute(array('name'=>$name));
      header('Location: http://localhost/testlsi/index.php?action=book');
  }


  public function getrow($nom){
      $req=$this->bdd->prepare("SELECT * FROM book WHERE nom=:nom");
      $req->execute(array('nom'=>$nom));
      $row=$req->fetch(PDO::FETCH_ASSOC);
      return $row;
  }

  
  public function update($name){
      $req=$this->bdd->prepare("UPDATE book SET nom=:newname,auteur=:author,annee=:an WHERE nom=:oldname");

      $req->execute(array( 'newname' =>$_POST['nom'],
      'author' => $_POST['auteur'],
      'an' => $_POST['annee'],
      'oldname'=>$name
      ));
      header('Location: http://localhost/testlsi/index.php?action=book');
  }


  public function getAll(){
      $reponse  = $this->bdd->query('select * from book');
      $arrayBooks =  array();
    
      while ($donnees = $reponse->fetch()) {
          array_push($arrayBooks, new Book ($donnees['nom'], $donnees['auteur'] , $donnees['annee']));
      }
      return $arrayBooks;
    }
  
}
