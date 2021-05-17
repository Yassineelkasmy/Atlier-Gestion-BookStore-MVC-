

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
<a href="http://localhost/testlsi/index.php?action=addbook" class="btn btn-success">Creer Nouveau Livre</a>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Auteur</th>
      <th scope="col">Annee</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($books as $book): ?>

    <tr>


      <td><?php echo $book->getName();?></p></td>
      <td><?php echo $book->getAuteur();?></p></td>
      <td><?php echo $book->getAnnee();?></p></td>
      <td>
      <?php $tab=array("name"=>$book->getName(),"auteur"=>$book->getAuteur(),"annee"=>$book->getAnnee()) ?>


      <form action="http://localhost/testlsi/index.php?action=getrow" method="post" >
            <button class="btn btn-primary" value="<?php echo $book->getName();?>" name="nom_update">
                    Modifier
            </button>
      </form>
      <form action="http://localhost/testlsi/index.php?action=delete" method="post" >
            <button class="btn btn-danger" value="<?php echo $book->getName();?>" name="nom_delete">
                    Delete
            </button>
      </form>
      </td>


    </tr>
    <?php endforeach; ?>

  </tbody>
</table>
</div>
    
</body>
</html>


