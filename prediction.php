<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link  href="style_header2.css" rel="stylesheet">
        <script src="js/header.js"></script>
        <link  href="css/style_prediction.css" rel="stylesheet">
        <script src="js/prediction.js"></script>
        
        <title>Goélands Breizh</title>

    </head>
    <div id="page_accueil">
        <body>
            <header>
              <?php 
                include("header2.php"); 
              ?>
            </header>

            <section class="container">

            <form  method="post" action="recup_image.php" enctype="multipart/form-data">
                <input type="file" id="goeland" name="goeland">
                <p>Déposez votre image içi ou cliquez dans cette zone</p>
                <button type="submit">Upload</button>
            </form>
                
            </section>

        </body>
    </div>

</html>
