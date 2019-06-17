<?php 
    // Si le formulaire a été envoyé...
    if(isset($_GET['login']) && isset($_GET['password']))
    {
        // On créé les cookies durant 60s
        // Le path doit être mis en '/' (valeur par défaut pour le chemin du serveur sur lequel le serveur est accessible) ...
        // ... pour qu'il soit disponible sur tout le domain.
        //setcookie(cookie_name, cookie_value, [expiry_time], [cookie_path], [domain], [secure], [httponly]);
        setcookie('loginCookie', $_GET['login'], time() + 60, '/');
        setcookie('pwdCookie', $_GET['password'], time() + 60, '/');
        // Permet le refresh de la page pour l'affichage du cookie
        header('Location: index.php');
    }
?>
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
        <h1 class="display-3">Exercice 3 - PHP</h1>
        <h2>Partie 8</h2>
        <p class="lead">Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. 
        A la validation du formulaire, stocker les informations dans un cookie.</p>
        <a href="../index.php" class="btn btn-primary">Retour</a>
      </div>
    </div>
      <div class="row justify-content-center">   
        <!-- la method GET sur le form permet de voir les valeurs des input dans l'url -->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="get" class="d-block col-5 ">
            <div class="form-group">
                <label for="formGroupExampleInput">LOGIN :</label>
                <input type="text" class="form-control" name="login" id="formGroupExampleInput">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">MOT DE PASSE :</label>
                <input type="password" class="form-control" name="password" id="formGroupExampleInput2">
            </div>
            <p><input type="submit" value="OK"></p>
        </form>
        <div>
        <?php
            // Si les cookies existent, on les affiche
            if(isset($_COOKIE['loginCookie']) && isset($_COOKIE['pwdCookie'])){
        ?>
                <p>Login : <?= $_COOKIE['loginCookie'] ?></p>
                <p>Mot de passe : <?= $_COOKIE['pwdCookie'] ?></p>
        <?php
            } else {
                echo 'Pas de cookie d\'enregistré';
            }
        ?>
        </div>
        
    </div>
  </div>
</body>
</html>

