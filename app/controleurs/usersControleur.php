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
  $user = \App\Modele\UsersModele\findOneByLoginPassword($connexion, $_POST['login'], $_POST['password']);

if ($user) {
  header('location: '. BASE_URL .'/users/login');
}

else {
  header('location: '. BASE_URL .'/users/login');
}
}
