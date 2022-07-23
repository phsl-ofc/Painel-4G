<?php

class EditController
{

    public function server()
    {
        $id = $_POST['id'];
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

        if (isset($_POST['edt_servidor'])) :

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

                $sql = $conn->prepare("UPDATE servidores SET Name='$nome', TYPE='$tipo', FLAG='$flag', ServerIP='$serverip', CheckUser='$checkuser', ServerPort='$serverport', SSLPort='$sslport', USER='', PASS='' WHERE id='$id'");
                $sql->execute();

                echo "<script>
                alert('Servidor editado com sucesso !');
                window.location='" . LINK . "';
                </script>";

            endif;
        else :
            header("location: " . LINK . "");
        endif;
    }

    public function payload()
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $flag = $_POST['flag'];
        $payload = $_POST['pay'];
        $sni = $_POST['sni'];
        $tlsip = $_POST['tlsip'];
        $proxyip = $_POST['proxyip'];
        $proxyport = $_POST['proxyport'];
        $info = $_POST['info'];

        if (!$_SESSION['login']) :
            header("location: " . LINK . "");
        endif;

        $conn = Connection::getConn();

        if (isset($_POST['edt_payload'])) :

            $sql = $conn->query("SELECT * FROM payloads WHERE Name='$nome'")->fetchColumn();

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

                $sql = $conn->prepare("UPDATE payloads SET Name='$nome', FLAG='$flag', Payload='$payload', SNI='$sni', TlsIP='$tlsip', ProxyIP='$proxyip', ProxyPort='$proxyport', Info='$info' WHERE id='$id'");
                $sql->execute();

                echo "<script>
                alert('Payload editada com sucesso !');
                window.location='" . LINK . "';
                </script>";

            endif;
        else :
            header("location: " . LINK . "");
        endif;
    }

    public function port()
    {
        $id = $_POST['id'];
        $porta = $_POST['porta'];

        if (!$_SESSION['login']) :
            header("location: " . LINK . "");
        endif;

        $conn = Connection::getConn();

        if (isset($_POST['edt_porta'])) :

            $sql = $conn->query("SELECT * FROM portas WHERE Porta='$porta'")->fetchColumn();

            if ($sql > 0) :
                echo "<script>
            alert('Essa porta já existe !');
            window.location='" . LINK . "';
            </script>";
            elseif (empty($porta)) :
                echo "<script>
                alert('Porta não pode ficar vazio');
                window.location='" . LINK . "';
                </script>";

            else :

                $sql = $conn->prepare("UPDATE portas SET Porta='$porta' WHERE id='$id'");
                $sql->execute();

                echo "<script>
                alert('Porta editada com sucesso !');
                window.location='" . LINK . "';
                </script>";

            endif;
        else :
            header("location: " . LINK . "");
        endif;
    }

    public function sms()
    {
        $sms = $_POST['sms'];

        if (!$_SESSION['login']) :
            header("location: " . LINK . "");
        endif;

        $conn = Connection::getConn();

        if (isset($_POST['edt_sms'])) :

                $sql = $conn->prepare("UPDATE config SET valor='$sms' WHERE nome='msg'");
                $sql->execute();

                echo "<script>
                alert('Mensagem atualizada com sucesso !');
                window.location='" . LINK . "';
                </script>";

        endif;
    }

    public function config()
    {
        $versao = $_POST['versao'];
        $notas = $_POST['notas'];
        $sms = $_POST['sms'];
        $update = $_POST['update'];
        $email = $_POST['email'];
        $contato = $_POST['contato'];
        $termos = $_POST['termos'];
        $checkuser = $_POST['checkuser'];

        if (!$_SESSION['login']) :
            header("location: " . LINK . "");
        endif;

        $conn = Connection::getConn();

        if (isset($_POST['config'])) :

            if (empty($versao)) :
                echo "<script>
                alert('Versão não pode ficar vazio !');
                window.location='" . LINK . "';
                </script>";
            elseif (empty($update)) :
                echo "<script>
                alert('Update não pode ficar vazio !');
                window.location='" . LINK . "';
                </script>";
            endif;

            $sql_v = $conn->query("UPDATE configs SET valor='$versao' WHERE nome='versao'");
            $sql_n = $conn->query("UPDATE configs SET valor='$notas' WHERE nome='notas'");
            $sql_s = $conn->query("UPDATE configs SET valor='$sms' WHERE nome='sms'");
            $sql_u = $conn->query("UPDATE configs SET valor='$update' WHERE nome='update'");
            $sql_e = $conn->query("UPDATE configs SET valor='$email' WHERE nome='email'");
            $sql_c = $conn->query("UPDATE configs SET valor='$contato' WHERE nome='contato'");
            $sql_t = $conn->query("UPDATE configs SET valor='$termos' WHERE nome='termos'");
            $sql_ch = $conn->query("UPDATE configs SET valor='$checkuser' WHERE nome='checkuser'");

            if ($sql_ch) :
                echo "<script>
            alert('Configurações editadas com sucesso !');
            window.location='" . LINK . "';
            </script>";
            endif;
        else :
            header("location: " . LINK . "");
        endif;
    }

    public function user()
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $senha2 = $_POST['senha2'];
        $senhamd = md5($senha2);

        if (!$_SESSION['login']) :
            header("location: " . LINK . "");
        endif;

        $conn = Connection::getConn();

        if (isset($_POST['edit_user'])) :

            if (empty($nome)) :
                echo "<script>
                alert('Nome não pode ficar vazio');
                window.location='" . LINK . "';
                </script>";
            elseif (empty($login)) :
                echo "<script>
                alert('Login não pode ficar vazio');
                window.location='" . LINK . "';
                </script>";
            endif;

            $vpass = $conn->prepare("SELECT * FROM usuarios WHERE id='$id'");
            $vpass->execute();
            $vpass = $vpass->fetch(PDO::FETCH_ASSOC);

            if(empty($senha) && empty($senha2)):
                $sql = $conn->prepare("UPDATE usuarios SET nome='$nome', login='$login' WHERE id='$id'");
                $sql->execute();

                $_SESSION['login'] = $login;

                echo "<script>
                alert('Perfil atualizado !');
                window.location='" . LINK . "';
                </script>";
            elseif(empty($senha) OR empty($senha2)):
                echo "<script>
                alert('Preencha o campo senha atual e nova senha !');
                window.location='" . LINK . "';
                </script>";
            elseif(md5($senha) == $vpass['senha']):
                $sql = $conn->prepare("UPDATE usuarios SET nome='$nome', login='$login', senha='$senhamd' WHERE id='$id'");
                $sql->execute();

                $_SESSION['login'] = $login;

                echo "<script>
                alert('Senha atualizada !');
                window.location='" . LINK . "';
                </script>";
            else:
                echo "<script>
                alert('Não foi possivel atender a solicitação !');
                window.location='" . LINK . "';
                </script>";
        endif;
    endif;

    }
}
