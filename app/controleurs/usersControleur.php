<?php
/*------------------------------------------------------------------
../app/controleurs/usersControleur.php
contrôleur des users
----------------------------------------------------------------*/

namespace App\Controleurs\Users;
use \App\Modeles\User;

/**
 * [indexAction description]
 * @param  PDO    $connexion [description]
 */

function loginFormAction(\PDO $connexion) {
  //  On charge la vue index dans $content
    GLOBAL $title, $content;
    $title = TITRE_USERS_LOGINFORM;
    ob_start();
      include '../app/vues/users/loginForm.php';
    $content = ob_get_clean();
}
