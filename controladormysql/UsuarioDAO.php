<?php
include_once 'UniversalConnect.php';

include_once "./models/Usuario.php";

class UsuarioDAO
{
    private $link;

    public function __construct()
    {
        $this->link = UniversalConnect::doConnect();
    }

    public function create(Usuario $user)
    {

        $sql = "INSERT INTO usuario (usuario,email,senha,nome,biografia,cidade,telefone,servico,fotoPerfil) values (:usuario, :email, :senha, :nome, :biografia, :cidade, :telefone, :servico, :fotoPerfil)";
        $stm = $this->link->prepare($sql);
        $stm->bindValue(":usuario", $user->getUsuario());
        $stm->bindValue(":email", $user->getEmail());
        $stm->bindValue(":senha", $user->getSenha());
        $stm->bindValue(":nome", $user->getNome());
        $stm->bindValue(":biografia", $user->getBiografia());
        $stm->bindValue(":cidade", $user->getCidade());
        $stm->bindValue(":telefone", $user->getTelefone());
        $stm->bindValue(":servico", $user->getServico());
        $stm->bindValue(":fotoPerfil", $user->getFotoPerfil());
        if ($stm->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function update(Usuario $user)
    {
        $sql = "UPDATE Usuario SET senha = :senha WHERE idUser = :usuario";
        $stm = $this->link->prepare($sql);
        $stm->bindValue(":senha", $user->getSenha());
        $stm->bindValue(":usuario", $user->getIdUsuario());
        if ($stm->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function doLogin(Usuario $user)
    {
        $sql = "SELECT * FROM Usuario WHERE usuario = :usuario AND senha = :senha";
        $stm = $this->link->prepare($sql);
        $stm->bindValue(":usuario", $user->getUsuario());
        $stm->bindValue(":senha", $user->getSenha());
        $stm->execute();
        if ($stm->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getOne(Usuario $user)
    {
        $sql = "SELECT * FROM tbUser WHERE usuario = :usuario AND senha AND senha = :senha";
        $stm = $this->link->prepare($sql);
        $stm->bindValue(":usuario ", $user->getUsuario());
        $stm->bindValue(":senha", $user->getSenha());
        $stm->execute();
        if ($stm->rowCount() > 0) {
            $temp = $stm->fetchAll(PDO::FETCH_OBJ);
            foreach ($temp as $u) {
                return $u;
            }
        } else {
            return null;
        }
    }

    public function getAllCity($cidade)
    {
        $sql = "SELECT * FROM usuario WHERE cidade = :cidade";
        $stm = $this->link->prepare($sql);
        $stm->bindValue(":cidade", $cidade);
        $stm->execute();
        if ($stm->rowCount() > 0) {
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } else {
            return null;
        }
    }
    public function getOneuser($idusuario)
    {
        $sql = "SELECT * FROM usuario WHERE idusuario = :idusuario";
        $stm = $this->link->prepare($sql);
        $stm->bindValue(":idusuario", $idusuario);
        $stm->execute();
        if ($stm->rowCount() > 0) {
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } else {
            return null;
        }
    }
}