<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice </title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 2 - PHP</h1>
        <h2>Partie 8</h2>
        <p class="lead">Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le 
            contenu des variables lastname, firstname et age grâce aux sessions. Ces variables auront été 
            définies directement dans le code. Il faudra afficher le contenu de ces variables sur la deuxième page.</p>
        <a href="../index.php" class="btn btn-primary">Retour</a>
      </div>
    </div>
    <div class="justify-content-center">
        <?php
            // On s'amuse à créer quelques variables de session dans $_SESSION
            $_SESSION['prenom'] = 'Jean';
            $_SESSION['nom'] = 'Dupont';
        ?>
        <p>Salut <?php echo $_SESSION['prenom']; ?> !</p>
        <a href="user.php" class="btn btn-primary">Lien</a>
    </div>
  </div>
</body>
</html>

