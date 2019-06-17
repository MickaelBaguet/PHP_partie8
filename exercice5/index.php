<?php
    // Set d'un nouveau login / mot de passe qui seront pris en compte au prochain refresh
    $newLogin = 'Nouveau login';
    $newPwd = 'Nouveau mot de passe';
    setcookie('loginCookie', $newLogin, time() + 60, '/');
    setcookie('pwdCookie', $newPwd, time() + 60, '/');
?>
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
                <h2>Partie 8</h2>
                <p class="lead">Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>
                <a href="../index.php" class="btn btn-primary">Retour</a>
            </div>
        </div>
        <div class="justify-content-center">   
            <h3>Valeurs du cookie de l'exercice 3 :</h3>
            <p class="mb-5">(Cookies changés, refresh pour voir les nouvelles valeurs)</p>
            <?php
                // Si les cookies existent, on les affiche
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

