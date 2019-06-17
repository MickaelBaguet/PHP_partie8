<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 3</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 4 - PHP</h1>
        <h2>Partie 8</h2>
        <p class="lead">Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.</p>
        <a href="../index.php" class="btn btn-primary">Retour</a>
      </div>
    </div>
    <div class="justify-content-center">   
        <h3 class="mb-5">Informations du cookie de l'exercice 3 :</h3>
        <?php
            // Si les cookies existent, on les affiche
            // Le cookie de l'exercice 3 est accessible ici (exercice 4) car un path a été défini
            if(isset($_COOKIE['loginCookie']) && isset($_COOKIE['pwdCookie'])){
        ?>
                <p><u>Login</u> : <?= $_COOKIE['loginCookie'] ?></p>
                <p><u>Mot de passe</u> : <?= $_COOKIE['pwdCookie'] ?></p>
        <?php
            } else {
                echo 'Pas de cookie d\'enregistré';
            }
        ?>
    </div>
  </div>
</body>
</html>

