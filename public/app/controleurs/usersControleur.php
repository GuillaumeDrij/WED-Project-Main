<?php
/*------------------------------------------------------------------
../app/controleurs/usersControleur.php
contrôleur des users
----------------------------------------------------------------*/

namespace App\Controleurs\UsersControleur;
 use \App\Modeles\UsersModele;



function loginFormAction() {
GLOBAL $content;
ob_start();
include '../app/vues/users/loginForm.php';
$content = ob_get_clean();
}

include_once '../app/modeles/usersModele.php';

function loginCheckAction(\PDO $connexion) {
  $user = UsersModele\findOneByLoginPassword($connexion, $_POST['login'], $_POST['password']);

if ($user) {
  //On donne un badge à l'utilisateur

  $_SESSION['user'] = $user;

  header('location: '. BASE_URL_ADMIN);
}

else {
  header('location: '. BASE_URL_PUBLIC. 'users/login');
     }
}
