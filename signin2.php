<?php

session_start();

?>
<!DOCTYPE html>
<html lang="fr-FR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/signin2.css" />
    <title>Biblio'Manga</title>
  </head>
  <body>
    <div class="container" id="container">
      <div class="nav">
        <div class="logo">
          <a href="home2.php">Biblio'<br />Manga</a>
        </div>
      </div>
      <div class="form-container sign-up-container">
        <?php
		if(!isset($_SESSION['connect'])){ ?>
        <form action="index.php?action=inscription" method="post">
          <h1>Créer un compte</h1>
          <span></span>
          <input type="text" placeholder="Pseudo" name="pseudo" />
          <input type="email" placeholder="Email" name="email" />
          <input type="password" placeholder="Password" name="password" />
          <input
            type="password"
            placeholder="Password Confirmation"
            name="passwordconfirm"
          />
          <input
            type="text"
            placeholder="Ton type de Manga préféré ? (Shonen, Seinen...)"
            name="type_manga"
          />
          <input
            type="number"
            placeholder="Nombre de Mangas lus ? (~environ)"
            name="nombre_manga"
          />
          <button>Inscription</button>
        </form>
        <?php
		 
         if(isset($_GET['error'])){
      
             if(isset($_GET['pass'])){
                 echo '<p id="error">Les mots de passe ne correspondent pas.</p>';
             }
             else if(isset($_GET['email'])){
                 echo '<p id="error">Cette adresse email est déjà utilisée.</p>';
             }
         }
         else if(isset($_GET['success'])){
             echo '<p id="success">Inscription prise correctement en compte.</p>';
         }
      
     ?>

     <?php } else { ?>

      <p id="info">
          Bonjour <?= $_SESSION['pseudo'] ?><br>
          <a href="deconnexion.php">Déconnexion</a>
        </p>
    
        <?php } ?>
      </div>

      <!-- CONNEXION -->
      
      <div class="form-container sign-in-container">
      <?php
		if(!isset($_SESSION['connect'])){ ?>
        <form action="index.php?action=connection" method="post">
          <h1>Se connecter</h1>
          <span></span>
          <input type="email" placeholder="Email" />
          <input type="password" placeholder="Password" />
          <a href="#">Mot de passe oublié?</a>
          <button type="submit" value="se connecter">Connection</button>
        </form>
        <?php } else { ?>

          <p id="info">
			Bonjour <?= $_SESSION['pseudo'] ?><br>
			<a href="deconnexion.php">Déconnexion</a>
		</p>

    <?php } ?>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Bon Retour!</h1>
            <p>
              Psst.. Tu as déjà un compte ?
            </p>
            <button class="ghost" id="signIn">Me connecter</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Salut, l'ami!</h1>
            <p>
              Créer ton compte en 10s pour accéder à toutes les fonctionnalités
            </p>
            <button class="ghost" id="signUp">Je m'inscris</button>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="signin2.js"></script>
</html>
