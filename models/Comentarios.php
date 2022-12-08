<?php

class Usuario{
private $idComentarios;
private $nome;
private $comentario;
private $data;
private $Usuario_idUsuario;


public function __construct($idComentarios, $nome, $comentario, $data, $Usuario_idUsuario){
$this->idComentarios = $idComentarios;
$this->nome = $nome;
$this->comentario = $comentario;
$this->data = $data;
$this->nome = $Usuario_idUsuario;

}

public function getidComentarios(){
return $this-idComentarios;
}
public function getEmail(){
return $this-email;
}
public function getcomentario(){
return $this-comentario;
}
public function getdata(){
return $this-data;
}
public function getUsuario_idUsuario(){
return $this-Usuario_idUsuario;
}

}

?>

