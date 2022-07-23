<?php

class DelController{

    public function server(){

        $id = $_POST['id'];

        if (!$_SESSION['login']) :
            header("location: " . LINK . "");
        endif;

        $conn = Connection::getConn();

        if (isset($_POST['del_servidor'])) :

        $sql = $conn->prepare("DELETE FROM servidores WHERE id='$id'");
        $sql->execute();

        if ($sql) :
            echo "<script>
            alert('Servidor excluido com sucesso !');
            window.location='" . LINK . "';
            </script>";
        endif;
        else :
            header("location: " . LINK . "");
        endif;
    }

    public function payload(){

        $id = $_POST['id'];

        if (!$_SESSION['login']) :
            header("location: " . LINK . "");
        endif;

        $conn = Connection::getConn();

        if (isset($_POST['del_payload'])) :

        $sql = $conn->prepare("DELETE FROM payloads WHERE id='$id'");
        $sql->execute();

        if ($sql) :
            echo "<script>
            alert('Payload excluida com sucesso !');
            window.location='" . LINK . "';
            </script>";
        endif;
        else :
            header("location: " . LINK . "");
        endif;
    }

    public function port(){

        $id = $_POST['id'];

        if (!$_SESSION['login']) :
            header("location: " . LINK . "");
        endif;

        $conn = Connection::getConn();

        if (isset($_POST['del_porta'])) :

        $sql = $conn->prepare("DELETE FROM portas WHERE id='$id'");
        $sql->execute();

        if ($sql) :
            echo "<script>
            alert('Porta excluida com sucesso !');
            window.location='" . LINK . "';
            </script>";
        endif;
        else :
            header("location: " . LINK . "");
        endif;
    }

}