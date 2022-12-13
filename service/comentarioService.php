<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Comentarios.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "controladormysql/ComentariosDAO.php";

$idComentarios = filter_input(INPUT_GET, "idComentarios");
$nome = filter_input(INPUT_POST, "nome");
$comentario = filter_input(INPUT_POST, "comentario");
$data = filter_input(INPUT_POST, "data");
$Usuario_idUsuario = filter_input(INPUT_POST, "Usuario_idUsuario");

$comentario = new Comentarios(null, $nome, $comentario, null, $idUsuario);

if (isset($Usuario_idUsuario)) {
    $comentario = new Comentarios($idComentarios, $nome, $comentario, $data, $Usuario_idUsuario);
} else {
    $comentario = new Comentarios(null, $nome, $comentario, null, $idUsuario);
}


$usercoment->setidComentarios(null);

/*
try {
    if ($ComentariosDAO>create($usercoment)) {
        header("Location: https://kimmim.shop/visualizar/html/perfilunico.php?enviado=true");
    } else {
        header("Location: https://kimmim.shop/visualizar/html/perfilunico.php?falha=true");
    }
} catch (PDOException $e) {
    echo "Deu ruim no try";
    echo $e->getMessage();
}
*/