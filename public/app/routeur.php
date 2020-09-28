<?php
/*----------------------------------------
..app/routeur.php
Routeur principal
--------------------------------------------*/
use \App\Controleurs\Posts;

if(isset($_GET['postID'])):
  // ROUTE DU DETAIL D'UN POST
  // PATTERN : ?postID=xxx
  // CTRL :    postsControleur
  // ACTION:   show
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\showAction($connexion, $_GET['postID']);


//ROUTE DES users
//FORMULAIRE BACKOFFICE
elseif (isset($_GET['users'])):
  include_once '../app/routeurs/users.php';


else :
  // ROUTE PAR DEFAUT - LISTE DES DERNIERS POSTS
  // PATTERN : /
  // CTRL :    postsControleur
  // ACTION:   index
  include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\Posts\indexAction($connexion);


  //ROUTE PAR DEFAUT

endif;
