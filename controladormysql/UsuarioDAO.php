<?php
include_once 'UniversalConnect.php';

include_once "./models/Usuario.php";

 class UsuarioDAO{
    private $link;
    
    public function __construct() {
        $this->link = UniversalConnect::doConnect();
    }

    public function create(Usuario $user){

        $sql = "INSERT INTO usuario (usuario,email,senha,nome,biografia,cidade,telefone,servico,fotoPerfil) values (:usuario, :email, :senha, :nome, :biografia, :cidade, :telefone, :servico, :fotoPerfil)";
        $stm = $this->link->prepare($sql);
        $stm->bindValue(":usuario",$user->getusuario());
        $stm->bindValue(":email",$user->getemail());
        $stm->bindValue(":senha",$user->getsenha());
        $stm->bindValue(":nome",$user->getnome());
        $stm->bindValue(":biografia",$user->getbiografia());
        $stm->bindValue(":cidade",$user->getcidade());
        $stm->bindValue(":telefone",$user->gettelefone());
        $stm->bindValue(":servico",$user->getservico());
        $stm->bindValue(":fotoPerfil",$user->getfotoPerfil());
        if($stm->execute()){
            return true;
        } else {
            return false;
        }
}

public function update (User $user){
    $sql = "UPDATE Usuario SET senha = :senha WHERE idUser = :usuario";
    $stm = $this->link->prepare($sql);
    $stm->bindValue(":senha",$user->getsenha());
    $stm->bindValue(":usuario",$user->getIdUser());
    if($stm->execute()){
        return true;
    } else {
        return false;
    }
}

public function doLogin(User $user){
    $sql = "SELECT * FROM Usuario WHERE usuario = :usuario AND senha = :senha";
    $stm = $this->link->prepare($sql);
    $stm->bindValue(":usuario",$user->getusuario());
    $stm->bindValue(":senha",$user->getsenha());
    $stm->execute();
    if ($stm->rowCount()>0){
        return true;
    } else {
        return false;
    }
}

public function getOne(User $user){
    $sql = "SELECT * FROM tbUser WHERE usuario = :usuario AND senha AND senha = :senha";
    $stm = $this->link->prepare($sql);
    $stm->bindValue(":usuario ",$user->getusuario ());
    $stm->bindValue(":senha",$user->getsenha());
    $stm->execute();
    if ($stm->rowCount()>0){
        $temp = $stm->fetchAll(PDO::FETCH_OBJ);
        foreach ($temp as $u){
            return $u;
        }
    } else {
        return null;
    }

    
}

    public function getAllCity($cidade){
        $sql = "SELECT * FROM usuario WHERE cidade = :cidade";
        $stm = $this->link->prepare($sql);
        $stm->bindValue(":cidade", $cidade);
        $stm->execute();
        if ($stm->rowCount()>0){
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } else {
            return null;
        }
    }

}

