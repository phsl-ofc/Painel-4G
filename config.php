<?php

/* Arquivo config.php
* Não mexa em nada que você não saiba
* Auto: https://t.me/Davidsdy
*/

session_start();

error_reporting(1);
ini_set('display_errors', 1 );

//configurações

#titulo do site
define( 'TITLE', 'Configurações conecta4G');

#link do site
define( 'LINK', 'http://'. $_SERVER['SERVER_NAME']);

#diretorio raiz
define( 'ROOT', dirname( __FILE__ ) );

#include views
define( 'VIEW', ROOT . '/app/views' );

#views de html e css
define( 'VIEWS', LINK . '/app/views');
