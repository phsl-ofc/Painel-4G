<?php

/* HomeController
* Pagina inicial se estiver logado se não tiver vai para o login
* Auto: https://t.me/Davidsdy
*/

class HomeController
{
    public function index()
    {
        if(!$_SESSION['login']):

            require (VIEW . '/login.php');

        else:

        $conn = Connection::getConn();

        $servers = array();
        $servers = ListItem::getServers();
        
        $payloads = array();
        $payloads = ListItem::getPayloads();

        $ports = array();
        $ports = ListItem::getPorts();

        require (VIEW . '/home.php');

        endif;
    }
}
