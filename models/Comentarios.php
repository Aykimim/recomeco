<?php

class Comentarios
{
    private $idComentarios;
    private $nome;
    private $comentario;
    private $data;
    private $Usuario_idUsuario;


    public function __construct($idComentarios, $nome, $comentario, $data, $Usuario_idUsuario)
    {
        $this->idComentarios = $idComentarios;
        $this->nome = $nome;
        $this->comentario = $comentario;
        $this->data = $data;
        $this->nome = $Usuario_idUsuario;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getIdComentarios()
    {
        return $this->idComentarios;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getComentario()
    {
        return $this->comentario;
    }
    public function getData()
    {
        return $this->data;
    }
    public function getUsuario_idUsuario()
    {
        return $this->Usuario_idUsuario;
    }
}