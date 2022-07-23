<?php

/* Class core
* Detecta qual pagina e ação
* Função view para incluir os html
* Auto: https://t.me/Davidsdy
*/

class Core
{

    public function start($getUrl)
    {

        if (isset($getUrl['action'])) {
            $action = $getUrl['action'];
        } else {
            $action = 'index';
        }

        if (isset($getUrl['page'])) {
            $controller = ucfirst($getUrl['page']) . 'Controller';
        } else {
            $controller = 'HomeController';
        }

        if (!class_exists($controller)) {
            header("location: ".LINK."");
        }

        call_user_func_array(array(new $controller, $action), array());
    }
	
}
