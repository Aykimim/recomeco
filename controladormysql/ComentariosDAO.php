<?php
include_once 'UniversalConnect.php';

include_once "./models/Comentarios.php";

class ComentariosDAO
{
    private $link;

    public function __construct()
    {
        $this->link = UniversalConnect::doConnect();
    }

    public function create(Comentarios $usercoment)
    {

        $sql = "INSERT INTO Comentarios (nome,comentario,data,Usuario_idUsuario) values (:nome, :comentario, :data, :Usuario_idUsuario)";
        $stm = $this->link->prepare($sql);
        $stm->bindValue(":nome", $usercoment->getNome());
        $stm->bindValue(":comentario", $usercoment->getComentario());
        $stm->bindValue(":data", $usercoment->getData());
        $stm->bindValue(":Usuario_idUsuario", $usercoment->getUsuario_idUsuario());
        if ($stm->execute()) {
            return true;
        } else {
            return false;
        }
    }
//olha eu 
public function getAllComent($Usuario_idUsuario)
{
    $sql = "SELECT * FROM Comentarios WHERE Usuario_idUsuario = :Usuario_idUsuario";
    $stm = $this->link->prepare($sql);
    $stm->bindValue(":Usuario_idUsuario", $Usuario_idUsuario);
    $stm->execute();
    if ($stm->rowCount() > 0) {
        return $stm->fetchAll(PDO::FETCH_OBJ);
    } else {
        return null;
    }
}






//ate aqui

    public function delete($idComentarios)
    {
        $sql = "DELETE FROM Comentario WHERE";
    }

    public function getAllComentario($Usuario_idUsuario)
    {
        $sql = "SELECT * FROM comantario WHERE Usuario_idUsuario = :Usuario_idUsuario";
        $stm = $this->link->prepare($sql);
        $stm->bindValue(":Usuario_idUsuario", $Usuario_idUsuario);
        $stm->execute();
        if ($stm->rowCount() > 0) {
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } else {
            return null;
        }
    }
}
