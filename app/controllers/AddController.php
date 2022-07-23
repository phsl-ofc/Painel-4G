<?php

class AddController
{

    public function index()
    {
        header('location: /');
    }

    public function server()
    {
        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $flag = $_POST['flag'];
        $serverip = $_POST['serverip'];
        $checkuser = $_POST['checkuser'];
        $serverport = $_POST['serverport'];
        $sslport = $_POST['sslport'];

        if (!$_SESSION['login']) :
            header("location: " . LINK . "");
        endif;

        $conn = Connection::getConn();

        if (isset($_POST['addserver'])) :

            $sql = $conn->query("SELECT * FROM servidores WHERE Name='$nome'")->fetchColumn();

            if ($sql > 0) :
                echo "<script>
            alert('Já existe um servidor com esse nome !');
            window.location='" . LINK . "';
            </script>";
            elseif (empty($nome)) :
                echo "<script>
            alert('Nome não pode ficar vazio !');
            window.location='" . LINK . "';
            </script>";

            else :

                $sql = $conn->prepare("INSERT INTO servidores SET Name='$nome', TYPE='$tipo', FLAG='$flag', ServerIP='$serverip', CheckUser='$checkuser', ServerPort='$serverport', SSLPort='$sslport', USER='', PASS=''");
                $sql->execute();

                echo "<script>
            alert('Servidor adicionado com sucesso !');
            window.location='" . LINK . "';
            </script>";

            endif;
        else :
            header("location: " . LINK . "");
        endif;
    }

    public function payload()
    {
        $nome = $_POST['nome'];
        $flag = $_POST['flag'];
        $payload = $_POST['pay'];
        $sni = $_POST['sni'];
        $tlsip = $_POST['tlsip'];
        $proxyip = $_POST['proxyip'];
        $proxyport = $_POST['proxyport'];
        $info = $_POST['info'];

        $conn = Connection::getConn();

        if (!$_SESSION['login']) :
            header("location: " . LINK . "");
        endif;

        $sql = $conn->query("SELECT * FROM payloads WHERE Name='$nome'")->fetchColumn();

        if (isset($_POST['addpay'])) :

            if ($sql > 0) :
                echo "<script>
            alert('Já existe uma payload com esse nome !');
            window.location='" . LINK . "';
            </script>";
            elseif (empty($nome)) :
                echo "<script>
            alert('Nome não pode ficar vazio !');
            window.location='" . LINK . "';
            </script>";
            else :

                $sql = $conn->prepare("INSERT INTO payloads SET Name='$nome', FLAG='$flag', Payload='$payload', SNI='$sni', TlsIP='$tlsip', ProxyIP='$proxyip', ProxyPort='$proxyport', info='$info'");
                $sql->execute();

                echo "<script>
            alert('Payload adicionada com sucesso !');
            window.location='" . LINK . "';
            </script>";

            endif;
        else :
            header("location: " . LINK . "");
        endif;
    }

    public function port()
    {

        $porta = $_POST['porta'];

        $conn = Connection::getConn();

        if (!$_SESSION['login']) :
            header("location: " . LINK . "");
        endif;

        if (isset($_POST['addporta'])) :

            $sql = $conn->query("SELECT * FROM portas WHERE Porta='$porta'")->fetchColumn();

            if ($sql > 0) :
                echo "<script>
            alert('Essa porta já existe !');
            window.location='" . LINK . "';
            </script>";
            elseif (empty($porta)) :
                echo "<script>
            alert('Porta não pode ficar vazio !');
            window.location='" . LINK . "';
            </script>";
            else :

                $sql = $conn->prepare("INSERT INTO portas SET Porta='$porta'");
                $sql->execute();

                echo "<script>
            alert('Porta adicionada com sucesso !');
            window.location='" . LINK . "';
            </script>";

            endif;
        else :
            header("location: " . LINK . "");
        endif;
    }
}
