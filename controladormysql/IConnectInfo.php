<?php

interface IConnectInfo {
    
    const HOST      = "localhost";
    const PORT      = "3306";
    const DBNAME    = "kimmim21_bancodedados";
    const USERNAME  = "kimmim21_eykimim";
    const PASSWORD  = "abacaxi1804";
    
    public static function doConnect();
}
