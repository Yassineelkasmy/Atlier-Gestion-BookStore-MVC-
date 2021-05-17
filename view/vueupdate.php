<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Ajouter Book</title>
</head>
<body>

<div class="container">
    <form method="post" action="http://localhost/testlsi/index.php?action=update">

    <div class="form-group">
        <label for="nom">Nouveau Titre:</label>
        <input type="text" class="form-control" id="nom"  name="nom" value="<?= $row['nom'] ?>">
    </div>
    <div class="form-group">
        <input type="hidden" class="form-control" name="oldnom" value="<?= $row['nom'] ?>">
    </div>
    <div class="form-group">
        <label for="auteur">Nouveau Auteur:</label>
        <input type="text" class="form-control" id="auteur" name="auteur" value="<?= $row['auteur'] ?>">
    </div>
    <div class="form-check">
        <label for="annee">Nouveau Annee:</label>
        <input type="number" class="form-control" id="annee" name="annee" value="<?= $row['annee'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">
      Modifier
    </button>
    </form>
</div>

    
</body>
</html>