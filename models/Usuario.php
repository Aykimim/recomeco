<?php

class Usuario
{
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

    public function __construct(
        $usuario,
        $email,
        $senha,
        $id_usuario,
        $nome,
        $biografia,
        $cidade,
        $telefone,
        $servico,
        $fotoPerfil
    ) {
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

    public function getUsuario()
    {
        return $this->usuario;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getsenha()
    {
        return $this->senha;
    }
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }
    public function getnome()
    {
        return $this->nome;
    }
    public function getBiografia()
    {
        return $this->biografia;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getServico()
    {
        return $this->servico;
    }

    public function getFotoPerfil()
    {
        return $this->fotoPerfil;
    }

    public function setFotoPerfil($fotoPerfil){
        $this->fotoPerfil = $fotoPerfil;
    }

    public function setIdUsuario($idUsuario){
        $this->id_usuario = $idUsuario;
    }
}
