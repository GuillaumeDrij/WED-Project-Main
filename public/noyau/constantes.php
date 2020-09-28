<?php

/*
./noyau/constantes.php
Constantes du framework
 */



$url = explode('index.php', $_SERVER['SCRIPT_NAME']);
define('BASE_URL_PUBLIC', 'http://' . $_SERVER['HTTP_HOST'] . $url[0]);

define('BASE_URL_ADMIN', str_replace('public', 'admin', BASE_URL_PUBLIC));
