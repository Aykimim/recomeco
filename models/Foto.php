<?php

class Foto{
private $idFoto;
private $url;
private $Usuario_idUsuario;

public function __construct($idFoto, $url, $Usuario_idUsuario)
{

$this->idFoto = $idFoto;
$this->url = $url;
$this->Usuario_idUsuario = $Usuario_idUsuario;

}

public function getusuario(){
return $this-usuario;
}

public function getid_usuario(){
return $this-id_usuario;
}
public function getfotoPerfil(){
return $this-fotoPerfil;
}


}

?>

