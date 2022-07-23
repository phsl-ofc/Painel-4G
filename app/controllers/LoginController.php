<?php

class LoginController{

    public function index(){

        $conn = Connection::getConn();

        $user = $_POST['user'];
        $pass = md5($_POST['pass']);

        $sql = $conn->prepare("SELECT * FROM usuarios WHERE login=:login AND senha=:senha");
        $sql->BindValue('login', $user);
        $sql->BindValue('senha', $pass);
        $sql->execute();

        if($sql->fetchColumn() > 0):

            $_SESSION['login'] = $user;

            header("location: ".LINK."");

        else:

            echo "<script>
            alert('Usuário ou senha incorretos');
            window.location='" . LINK . "';
            </script>";

        endif;

    }

}