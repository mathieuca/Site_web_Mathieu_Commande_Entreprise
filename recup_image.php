<?php

    $target_dir = "notebook\NestsRecognition\Inférence\Input\im";
    $target_file = $target_dir . basename($_FILES["goeland"]["name"]);

    if(move_uploaded_file($_FILES["goeland"]['tmp_name'], $target_file)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
    {
	    echo 'Upload effectué avec succès !';
    }
    else //Sinon (la fonction renvoie FALSE).
    {
	    echo 'Echec de l\'upload  !';
    }

    //on fait maintenant tourner le notebook inférence avec l'image qui a été upload, il faudra peut etre juste adapter laffichage des données

    exec('python C:\MAMP\htdocs\tests\site_goelands\notebook\NestsRecognition\test.py', $var);
    print_r($var);


?>