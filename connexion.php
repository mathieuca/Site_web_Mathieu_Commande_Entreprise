<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link  href="style_header2.css" rel="stylesheet">
        <link  href="css/css_connexion.css" rel="stylesheet">
        <script src="js/header.js"></script>
    </head>
    
    <div id="page_accueil">
        <body>
            <header>
              <?php 
              include("header2.php"); 
              ?>
            </header>
            <?php
                      try
                      {
                        // On se connecte à MySQL
                        $mysqlClient = new PDO('mysql:host=localhost;dbname=goeland;charset=utf8', 'root', 'root');
                      }
                      catch(Exception $e)
                      {
                        // En cas d'erreur, on affiche un message et on arrête tout
                              die('Erreur : '.$e->getMessage());
                      }
                      
                      // Si tout va bien, on peut continuer
                      
                      // On récupère tout le contenu de la table recipes
                      $sqlQuery = 'select mail, mdp FROM user';
                      $recipesStatement = $mysqlClient->prepare($sqlQuery);
                      $recipesStatement->execute();
                      $users = $recipesStatement->fetchAll();
            ?>
            <?php

            // Validation du formulaire
            if (isset($_POST['mail']) &&  isset($_POST['password'])) {
                foreach ($users as $user) {
                    if (
                        $user['mail'] === $_POST['mail'] &&
                        $user['mdp'] === $_POST['password']
                    ) {
                        $loggedUser = [
                            'mail' => $user['mail'],
                        ];
                        $_SESSION['logged']=[
                            'mail' => $user['mail'],
                        ];
                    } else {
                        $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                            $_POST['mail'],
                            $_POST['password']
                        );
                    }
                }
            }
            ?>

            <!--
            Si utilisateur/trice est non identifié(e), on affiche le formulaire
            -->
            <?php if(!isset($loggedUser)): ?>

            <div class="login-box">
                <h2>Login</h2>
                <form method="post" action="connexion.php">

                  <div class="user-box">
                    <input type="text" name="mail" id="mail">
                    <label>Adresse mail</label>
                  </div>

                  <div class="user-box">
                    <input type="password" name="password" id="password">
                    <label>Mot de passe</label>
                  </div>
                  
                    <span></span>
                    <span></span>
                    
                    <span></span>
                    <span></span>
                    <button class="btn">Se connecter</button>
                    <a id="len1" class="hoverable"  href="inscription.php">S'inscrire</a>
                  
                </form>
                
              </div>
              
            <!-- 
            Si utilisateur/trice bien connectée on le redirige vers le choix des formulaires
            -->
            <?php else: ?>
              <?php
                header('Location: logged.php');
                exit();
              ?>
            <?php endif; ?>
        


        </body>
        
    </div>

</html>
