<?php
/*----------------------------------------
..app/routeur.php
Routeur principal
--------------------------------------------*/

// ROUTE PAR DEFAUT

if(isset($_GET['user'])):
  include_once '../app/routeurs/user.php';
endif;
