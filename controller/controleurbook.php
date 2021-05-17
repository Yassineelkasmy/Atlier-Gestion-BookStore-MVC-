<?php
require_once "model/book.php";
require_once "model/bookDao.php";
require_once 'view/view.php';

class ControleurBook {

    private $book , $bookDao;

    public function __construct(){ 
        $this->bookDao = new BookDAO();
    }

    //si $_GET['ACTION']
    public function getBooks() {
        $books = $this->bookDao->getAll(); 
        $vue = new Vue("book"); 
        $vue->generer(array('books' => $books));
    } 

    //si $_GET['ACTION'] 
    public function addbook() {
        $book = $this->book = new Book($_POST["name"], $_POST["name"] , $_POST["name"]) ;        
        $vue = new Vue("addbook");         
        $vue->generer(array('name' => $book->getName()));
    } 

    //si $_GET['ACTION'] 
    public function savebook($nom,$auteur,$annee) {    
        $book=$this->book =new Book($nom, $auteur , $annee) ;
        $this->bookDao->save($this->book);
    } 

    //si $_GET['ACTION']
    public function deleteBook($nom){
        $this->bookDao->delete($nom);
    }

    //si $_GET['ACTION'] 
    public function updateBook($nom){
        $this->bookDao->update($nom);
    }

    //si $_GET['ACTION'] 
    public function getBook($name){
        $row=$this->book=$this->bookDao->getrow($name);
        $vue = new Vue("update");       
        $vue->generer(array('row' => $row));
    }
}

?>





