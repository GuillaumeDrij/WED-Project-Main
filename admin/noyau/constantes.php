<?php

/*
./noyau/constantes.php
Constantes du framework
 */


// BASE URL DE L'APP FRONT
$url = explode('index.php', $_SERVER['SCRIPT_NAME']);
define('BASE_URL_PUBLIC', 'http://' . $_SERVER['HTTP_HOST'] . $url[0]);
