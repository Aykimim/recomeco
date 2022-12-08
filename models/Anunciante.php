<?php

class Anunciante{
    private $email;
    private $senha;
    private $id_usuario;

    public function __construct($email,$senha, $id_usuario){
        $this->email = $email;
        $this->senha = $senha;
        $this->id_usuario = $id_usuario;
    }

    public function getEmail(){
        return $this-email;
    }

    public function 
}