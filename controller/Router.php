<?php

require_once "controleurbook.php";
require_once "view/view.php";

class Routeur {
    private $ctrlBook;
    public function __construct() {
        $this->ctrlBook = new ControleurBook(); 
    }
    
    
    public function routerRequete() { 
    
    try {
        if (isset($_GET['action'])) {
            
            if ($_GET['action'] == 'book') {

                    $this->ctrlBook->getBooks(); 
                    
            } else if($_GET['action'] == 'addbook'){

                    $this->ctrlBook->addbook(); 

            } else if($_GET['action'] == 'savebook'){
                
                $this->ctrlBook->savebook($_POST['nom'],$_POST['auteur'],$_POST['annee']); 
            
            }else if($_GET['action'] == 'delete'){
            
                $this->ctrlBook->deleteBook($_POST['nom_delete']);
            }
            else if($_GET['action'] == 'update'){
               
                $this->ctrlBook->updateBook($_POST['oldnom']);
            }
            else if($_GET['action'] == 'getrow'){
               
                $this->ctrlBook->getBook($_POST['nom_update']);
            }
            else{
                throw new Exception("Action non valide");
            } 

        }
    }
    catch (Exception $e) {
        $this->erreur($e->getMessage()); }
    }
     
    private function erreur($msgErreur) {
         $vue = new Vue("Erreur"); 
         $vue->generer(array('msgErreur' => $msgErreur));
    } 
}
     