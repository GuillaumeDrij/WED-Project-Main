<?php

/*
          ./noyau/protect.php;

    /!\  VERIFICATION DES BADGES /!\

 */
 //   if( !isset($_SESSION['']) || (time() - $_SESSION['']) > 60 )
 //  $_SESSION[''] = time();


//Si y a pas de badge, je redirige vers le formulaire de login
//Attention vous allez devoir travailler avec les BASE_URL...
//Soit vous chargez les constantes public
//Soit vous chargez les constantes admin

  if(!isset($_SESSION['user'])):
  header('location: '. BASE_URL_PUBLIC .' users/login');
endif;
