<?php

class ListItem
{

    public static function getServers()
    {

        $conn = Connection::getConn();

        $sql = $conn->prepare("SELECT * FROM servidores");
        $sql->execute();

        $serverList = array();

        $i = 0;

        while ($row = $sql->fetch()) {
            $serverList[$i]['id'] = $row['id'];
            $serverList[$i]['Name'] = $row['Name'];
            $serverList[$i]['TYPE'] = $row['TYPE'];
            $serverList[$i]['FLAG'] = $row['FLAG'];
            $serverList[$i]['ServerIP'] = $row['ServerIP'];
            $serverList[$i]['CheckUser'] = $row['CheckUser'];
            $serverList[$i]['SSLPort'] = $row['SSLPort'];
            $serverList[$i]['USER'] = $row['USER'];
            $serverList[$i]['PASS'] = $row['PASS'];
            $i++;
        }

        return $serverList;
    }

    public static function getPayloads()
    {

        $conn = Connection::getConn();

        $sql = $conn->prepare("SELECT * FROM payloads");
        $sql->execute();

        $serverList = array();

        $i = 0;

        while ($row = $sql->fetch()) {
            $serverList[$i]['id'] = $row['id'];
            $serverList[$i]['Name'] = $row['Name'];
            $serverList[$i]['FLAG'] = $row['FLAG'];
            $serverList[$i]['Payload'] = $row['Payload'];
            $serverList[$i]['SNI'] = $row['SNI'];
            $serverList[$i]['TlsIP'] = $row['TlsIP'];
            $serverList[$i]['ProxyIP'] = $row['ProxyIP'];
            $serverList[$i]['ProxyPort'] = $row['ProxyPort'];
            $serverList[$i]['Info'] = $row['Info'];
            $i++;
        }

        return $serverList;
    }

    public static function getPorts()
    {

        $conn = Connection::getConn();

        $sql = $conn->prepare("SELECT * FROM portas");
        $sql->execute();

        $serverList = array();

        $i = 0;

        while ($row = $sql->fetch()) {
            $serverList[$i]['id'] = $row['id'];
            $serverList[$i]['Porta'] = $row['Porta'];
            $i++;
        }

        return $serverList;
    }
}
