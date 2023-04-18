<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link  href="style_header2.css" rel="stylesheet">
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
            <div class="wrap">  
            <section class="container">
                
            <div>
                <p>
                    <br><br>
                    Ce site a pour but de faciliter l’utilisation d’algorithmes de prédiction de présence de goélands.
                    Il vise principalement les ornithologues mais peut être utilisé par toute personne ayant les accès à ce
                    site.
                </p>

                <h1>Pourquoi ce site ?</h1>

                <p>
                    <br><br>
                    Des jupyter notebooks pouvant prédire le nombre et le type de goélands existaient déjà. Mais leur
                    utilisation peut paraître compliquée et fastidieuse pour quelqu’un de novice en programmation.
                    Ce site facilite donc l’utilisation de ces notebooks et vous permettra de faire vos prédictions sans vous
                    soucier des lignes de code.
                </p>
                

                <h1>Comment utiliser ce site ?</h1> 

                <p>
                    <br><br>
                        Premièrement, cette page d’accueil vous servira de point de départ dans vos recherches.
                </p>

                <p>
                    L’onglet prédiction sert à prédire le nombre et le type de goélands présents sur l’image. Il faut tout
                    d’abord cliquer sur l’encadré puis chercher l’image dans votre ordinateur ou tout simplement la glisser
                    dans l’encadré à partir d’un dossier déjà ouvert. Puis cliquer sur upload, cela lancera le code et vous
                    renverra la prédiction.
                </p>
                
                <p>
                        L’onglet notebooks vous permettra d’accéder aux notebooks commentés sous format pdf ou sous format
                    jupyter : cela pourra vous permettre de comprendre comment le code fonctionne et, si vous avez des
                    bases en python (langage informatique), vous permettre de télécharger le code afin de le modifier selon
                    vos préférence (et de nous proposer des améliorations éventuellement).
                </p>
                
                <p>
                    L’onglet contact vous permet de nous envoyer un message si vous avez des questions, des propositions
                    ou s’il y a des bugs que vous aimeriez résoudre.
                </p>
                
            </div>
            </section>
            </div>
        
        </body>
    </div>
    
</html>
