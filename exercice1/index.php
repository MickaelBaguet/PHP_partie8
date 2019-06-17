<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 1</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 1 - PHP</h1>
        <h2>Partie 8</h2>
        <p class="lead">Faire une page HTML permettant de donner à l'utilisateur :
            <ul>
                <li>Son User Agent</li>
                <li>Son adresse ip</li>
                <li>Le nom du serveur</li>
            </ul>
        </p>
        <a href="../index.php" class="btn btn-primary">Retour</a>
      </div>
    </div>
      <div class="justify-content-center">   
          <p>Le User Agent : <?= $_SERVER['HTTP_USER_AGENT'] ?></p>
          <p>Son adresse ip v1 : <?= gethostbyname($_SERVER['SERVER_NAME']) ?></p>
          <p>Son adresse ip v2 : <?= $_SERVER['SERVER_ADDR'] ?></p>
          <p>Son adresse ip v3 : <?= $_SERVER['REMOTE_ADDR'] ?></p>
          <p>Nom serveur : <?= $_SERVER['SERVER_NAME'] ?></p>
    </div>
  </div>
</body>
</html>

