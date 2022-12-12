<?php

class Foto
{
    private $idFoto;
    private $url;
    private $Usuario_idUsuario;

    public function __construct($idFoto, $url, $Usuario_idUsuario)
    {

        $this->idFoto = $idFoto;
        $this->url = $url;
        $this->Usuario_idUsuario = $Usuario_idUsuario;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getIdUsuario()
    {
        return $this->Usuario_idUsuario;
    }

    public function getIdFoto(){
        return $this->idFoto;
    }
}