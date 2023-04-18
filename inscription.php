

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link  href="style_header2.css" rel="stylesheet">
        <link  href="css/style_inscription.css" rel="stylesheet">
        <script src="js/header.js"></script>
    </head>
    <div id="page_accueil">
        <body>
            <header>
              <?php 
              include("header2.php"); 
              ?>
            </header>
        
            <form method="post" action="recup_inscription.php">
                <p>
                    <label> Adresse mail : </label><br />
                    <input type="text" name="mail" id="mail" /> <br />
                    <br />
                    <br />
                    <label> Informations : </label> <br />
                    <label> Nom</label> : <input type="text" name="nom" id="nom" /><br />
                    <br />
                    <label> Prenom</label> : <input type="text" name="prenom" id="prenom" /><br />
                    <br />
                    <label> Mot de passe</label> : <input type="password" name="mdp" id="mdp" /><br />
                    <br />
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4">
                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Envoyer</button>
                    
                
                </p>
            </form>
        </body>
</div>
</html>
