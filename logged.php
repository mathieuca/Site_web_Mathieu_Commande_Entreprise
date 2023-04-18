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
        <script src="js/header.js"></script>
    </head>
    <div id="page_accueil">
    <?php if(isset($_SESSION['logged'])): ?>    
        <body>
            <header>
              <?php 
              include("header2.php"); 
              ?>
            </header>
            <div class="container">

                <p>
                    page des previsions precedentes faites par l'utilisateur
                </p>
             
            </div>

    </body>
    <?php else: ?>
              <?php
                header('Location: connexion.php');
                exit();
              ?>
    <?php endif; ?>
    </div>
</html>
