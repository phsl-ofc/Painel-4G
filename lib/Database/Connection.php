<?php

abstract class Connection
{
    private static $conn;

    public static function getConn()
    {
        if (self::$conn == null) {
            try {

                $dbhost = "localhost"; #host do banco de dados
                $dbuser = "usuario"; #usuário do banco de dados
                $dbpass = "senha"; #senha do banco de dados
                $dbname = "banco"; #nome banco de dados

                self::$conn = new PDO(
                    "mysql:host=$dbhost;dbname=$dbname",
                    $dbuser,
                    $dbpass,
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
                );
            } catch (PDOException $e) {
                echo "<center><h2>Banco de dados sem conexão, verifique o arquivo <b>lib/Database/Connection.php</b><br>" . $e->getMessage();
                exit;
            }
        }
        return self::$conn;
    }
}
