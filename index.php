<?php

/* Class core
* Script para ajudar a manipular o conecta4G
* Não mexa em nada que você não saiba
* Auto: https://t.me/Davidsdy
*/

include_once 'config.php';
include_once 'app/core/Core.php';

include_once 'app/controllers/HomeController.php';
include_once 'app/controllers/AddController.php';
include_once 'app/controllers/DelController.php';
include_once 'app/controllers/EditController.php';
include_once 'app/controllers/LoginController.php';

include_once 'app/models/ListItem.php';
include_once 'app/models/Functions.php';

include_once 'lib/Database/Connection.php';

//arquivo de estrutura html
$template = file_get_contents('app/views/template/structure.html');

ob_start();
$core = new Core;
$core->start($_GET);
$exit = ob_get_contents();
ob_end_clean();

$search = array('{{view}}','{{title}}','{{content}}');
$replace = array(VIEWS, TITLE, $exit);

$tplReady = str_replace($search, $replace, $template);
echo $tplReady;
