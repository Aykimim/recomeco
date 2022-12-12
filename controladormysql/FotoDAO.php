<?php
include_once 'UniversalConnect.php';

include_once "./models/Foto.php";

 class FotoDAO{
    private $link;

    public function __construct() {
        $this->link = UniversalConnect::doConnect();
    }

    public function create(Foto $user){
        $sql = "INSERT INTO Foto (url,Usuario_idUsuario) values (:url, :Usuario_idUsuario)";
        $stm = $this->link->prepare($sql);
        $stm->bindValue(":url",$user->geturl());
        $stm->bindValue(":Usuario_idUsuario",$user->getIdUsuario());
        if($stm->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function show ($idUser){
        $sql = "SELECT *FROM Foto WHERE Usuario_idUsuario = :Usuario_idUsuario";
        $stm = $this->link->prepare($sql);
        $stm->bindValue(":Usuario_idUsuario",$idUser);
        $stm->execute();
        if($stm->rowCount()>0){
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } else {
            return null;
        }
    }
 }