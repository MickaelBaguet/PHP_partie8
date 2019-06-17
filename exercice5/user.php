<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 5</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 5 - PHP</h1>
        <h2>Partie 7</h2>
        <p class="lead">Créer un formulaire sur la page index.php avec :
        Une liste déroulante pour la civilité (Mr ou Mme).
        Un champ texte pour le nom.
        Un champ texte pour le prénom.
        Ce formulaire doit rediriger vers la page index.php.
        Vous avez le choix de la méthode.</p>
        <a href="../index.php" class="btn btn-primary">Retour</a>
      </div>
    </div>
    <div class="row justify-content-center">    
        <p>Bonjour <?= $_POST['civilite']; ?>. <?= $_POST['lastname']; ?> <?= $_POST['firstname'];?>, comment allez-vous ?</p>
    </div>

  </div>
</body>
</html>