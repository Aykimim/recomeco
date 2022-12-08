<?php

include_once "../model/Aluno.php";
include_once "../controller/AlunoDAO.php";

$usuario = filter_input(INPUT_GET,"usuario");
$email = filter_input(INPUT_GET,"email");
$senha = filter_input(INPUT_GET,"senha");
$id_usuario = filter_input(INPUT_GET,"id_usuario");
$nome = filter_input(INPUT_GET,"nome");
$biografia= filter_input(INPUT_GET,"biografia");
$cidade = filter_input(INPUT_GET,"cidade");
$telefone = filter_input(INPUT_GET,"telefone");
$servico = filter_input(INPUT_GET,"servico");

// Se o usuário clicou no botão cadastrar efetua as ações
if (isset($_POST['cadastrar'])) {
    
    // Recupera os dados dos campos
    $foto = $_FILES["foto"];
    
    // Se a foto estiver sido selecionada
    if (!empty($foto["name"])) {
        
        // Largura máxima em pixels
        $largura = 150;
        // Altura máxima em pixels
        $altura = 180;
        // Tamanho máximo do arquivo em bytes
        $tamanho = 1000;
        $error = array();
        // Verifica se o arquivo é uma imagem
        if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
            $error[1] = "Isso não é uma imagem.";
            } 
    
        // Pega as dimensões da imagem
        $dimensoes = getimagesize($foto["tmp_name"]);
    
        // Verifica se a largura da imagem é maior que a largura permitida
        if($dimensoes[0] > $largura) {
            $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
        }
        // Verifica se a altura da imagem é maior que a altura permitida
        if($dimensoes[1] > $altura) {
            $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
        }
        
        // Verifica se o tamanho da imagem é maior que o tamanho permitido
        if($foto["size"] > $tamanho) {
                $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
        }
        // Se não houver nenhum erro
        if (count($error) == 0) {
        
            // Pega extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
            // Gera um nome único para a imagem
            $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
            // Caminho de onde ficará a imagem
            $caminho_imagem = "fotosdosusuario/" . $nome_imagem . $id_usuario;
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($foto["tmp_name"], $caminho_imagem);
        
        
        }
    }
}

$user = new Usuario ($usuario,$email,$senha,$id_usuario,$nome,$biografia,$cidade,$telefone,$servico,$caminho_image);
$userDAO = new UsuarioDAO();

if ($action=="matricular"){
    if($userDAO->createMatricula($user)){
        echo "Cadastrado";
    } else {
        echo "Erro";
    }
}