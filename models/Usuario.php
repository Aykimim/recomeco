<?php

class Usuario{
private $usuario;
private $email;
private $senha;
private $id_usuario;
private $nome;
private $biografia;
private $cidade;
private $telefone;
private $servico;
private $fotoPerfil;

public function __construct($usuario, $email, $senha, $id_usuario, $nome, $biografia, $cidade, $telefone, $servico, $fotoPerfil
){
$this->usuario = $usuario;
$this->email = $email;
$this->senha = $senha;
$this->id_usuario = $id_usuario;
$this->nome = $nome;
$this->biografia = $biografia;
$this->cidade = $cidade;
$this->telefone = $telefone;
$this->servico = $servico;
$this->fotoPerfil = $fotoPerfil;

}

public function getusuario(){
return $this-usuario;
}
public function getEmail(){
return $this-email;
}
public function getsenha(){
return $this-senha;
}
public function getid_usuario(){
return $this-id_usuario;
}
public function getnome(){
return $this-nome;
}
public function getbiografia(){
return $this-biografia;
}

public function getcidade(){
return $this-cidade;
}

public function gettelefone(){
return $this-telefone;
}

public function getservico(){
return $this-servico;
}

public function getfotoPerfil(){
return $this-fotoPerfil;
}


}

?>