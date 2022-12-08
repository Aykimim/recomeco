<?php

include_once 'IConnectInfo.php';

class UniversalConnect implements IConnectInfo {
    
    private static $host        = IConnectInfo::HOST;
    private static $port        = IConnectInfo::PORT;
    private static $dbName      = IConnectInfo::DBNAME;
    private static $userName    = IConnectInfo::USERNAME;
    private static $passWord    = IConnectInfo::PASSWORD;
    
    private static $link;
    
    public static function doConnect() {
        try {
    
            self::$link = new PDO("mysql:host=".self::$host.";port=".self::$port.";dbname=".self::$dbName,
                    self::$userName, self::$passWord);
            
            self::$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            #echo 'Conexão estabelecida com sucesso.';
            return self::$link;

        } catch (Exception $ex) {
            
            echo 'Falha na conexão: '.$ex->getMessage();
        }
    }
}
