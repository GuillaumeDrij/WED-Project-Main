<?php
/*
    ../app/routeurs/users.php
    $_GET['users']
*/

 include_once '../app/controleurs/usersControleur.php';


switch ($_GET['users']):
  case 'loginForm':
  // FORMULAIRE DE LOGIN
  // PATTERN: /index.php?users=loginForm
  // CTRL: usersControleur
  // ACTION: loginForm
   \App\Controleurs\UsersControleur\loginFormAction();
    break;

    case 'loginCheck':
    // FORMULAIRE DE CONNEXION
    // PATTERN: /index.php?users=loginForm
    // CTRL: usersControleur
    // ACTION: loginCheck
     \App\Controleurs\UsersControleur\loginCheckAction($connexion);
      break;

default:
//Je charge 404
break;

endswitch;
