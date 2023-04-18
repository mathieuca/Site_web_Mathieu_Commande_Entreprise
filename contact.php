<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link  href="style_header2.css" rel="stylesheet">
        <link  href="css/style_contact.css" rel="stylesheet">
        <script src="js/header.js"></script>
        

        <title>Goélands Breizh</title>
    </head>
    <div id="page_accueil">
        <body>
            <header>
              <?php 
                include("header2.php"); 
              ?>
            </header>

            <div class="container contact-form">
            <div class="contact-image">
                <img src="goeland.jpg" alt="rocket_contact"/>
            </div>
            <form method="post" action="email.php">
                <h3>Contactez nous :</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Votre nom *" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Votre email *" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="object" class="form-control" placeholder="Object *" required/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Envoyer message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Votre message *" style="width: 100%; height: 150px;" required></textarea>
                        </div>
                    </div>
                </div>
            </form>
    </div>

        </body>
    </div>
    
</html>
