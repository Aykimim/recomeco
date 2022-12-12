<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Comentarios.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "controladormysql/ComentariosDAO.php";

$idUsuario=filter_input(INPUT_GET,"idUsuario");
