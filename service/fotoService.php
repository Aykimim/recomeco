<?php

include_once "../models/Foto.php";
include_once "../controladormysql/FotoDAO.php";

$action = filter_input(INPUT_POST,"action");
$Usuario_idUsuario= filter_input(INPUT_GET,"Usuario_idUsuario");
$url = filter_input(INPUT_POST,"url");

$foto = new Foto(null,$url,$Usuario_idUsuario);

$fotoDAO = new FotoDAO();
$fotos = $fotoDAO->show($Usuario_idUsuario);

if ($action=="adicionar"){
    if($fotoDAO->create($Usuario_idUsuario)){
        echo "Cadastrado";
    } else {
        echo "Erro";
    }
}