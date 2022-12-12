<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/models/Usuario.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/controladormysql/UsuarioDAO.php";

$id_usuario = filter_input(INPUT_POST, "id_usuario");
$nome = filter_input(INPUT_POST, "nome");
$usuario = filter_input(INPUT_POST, "usuario");
$email = filter_input(INPUT_POST, "email");
$biografia = filter_input(INPUT_POST, "biografia");
$cidade = filter_input(INPUT_POST, "cidade");
$telefone = filter_input(INPUT_POST, "telefone");
$servico = filter_input(INPUT_POST, "servico");
$senha = filter_input(INPUT_POST, "senha");
$action =  filter_input(INPUT_POST, "action");
$fotoPerfil = filter_input(INPUT_POST, "fotoPerfil");

//olha eu daqui
$senhaconf = filter_input(INPUT_POST, "senhaconf");
if ($senha != $senhaconf) {
    header("Location: https://kimmim.shop/visualizar/html/anunciantes/cadastro.php?senhanaoconf=true");
} else {
    //ate aqui



    if (isset($id_usuario)) {
        $user = new Usuario($usuario, $email, $senha, $id_usuario, $nome, $biografia, $cidade, $telefone, $servico, $fotoPerfil);
    } else {
        $user = new Usuario($usuario, $email, $senha, null, $nome, $biografia, $cidade, $telefone, $servico, null);
    }

    $usuarioDAO = new UsuarioDAO();

    // Se o usuário clicou no botão cadastrar efetua as ações
    //if (isset($_POST['cadastrar'])) {
    if ($action == "cadastrar") {
        // echo "Construi";

        // Recupera os dados dos campos
        $foto = $_FILES["foto"];

        // Se a foto estiver sido selecionada
        if (!empty($foto["name"])) {

            // Largura máxima em pixels
            $largura = 10000;
            // Altura máxima em pixels
            $altura = 10000;
            // Tamanho máximo do arquivo em bytes
            $tamanho = 5000000;
            $error = array();
            // Verifica se o arquivo é uma imagem
            if (!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])) {
                $error[1] = "Isso não é uma imagem.";
            }

            // Pega as dimensões da imagem
            $dimensoes = getimagesize($foto["tmp_name"]);

            // Verifica se a largura da imagem é maior que a largura permitida
            if ($dimensoes[0] > $largura) {
                $error[2] = "A largura da imagem não deve ultrapassar " . $largura . " pixels";
            }
            // Verifica se a altura da imagem é maior que a altura permitida
            if ($dimensoes[1] > $altura) {
                $error[3] = "Altura da imagem não deve ultrapassar " . $altura . " pixels";
            }

            // Verifica se o tamanho da imagem é maior que o tamanho permitido
            if ($foto["size"] > $tamanho) {
                $error[4] = "A imagem deve ter no máximo " . $tamanho . " bytes";
            }
            // Se não houver nenhum erro
            if (count($error) == 0) {

                // Pega extensão da imagem
                preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
                // Gera um nome único para a imagem
                $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
                // Caminho de onde ficará a imagem
                $caminho_imagem = $_SERVER['DOCUMENT_ROOT'] . "/visualizar/img/fotosDosUsuario/" . $nome_imagem . $id_usuario;
               // $caminho_imagem = $_SERVER['DOCUMENT_ROOT'] . "/visualizar/img/fotosDosUsuario/";
                
               // Faz o upload da imagem para seu respectivo caminho
                move_uploaded_file($foto["tmp_name"], $caminho_imagem);

                //Salva a foto no perfil de usuario;
                $user->setFotoPerfil($caminho_imagem);
                //$user->setFotoPerfil($_SERVER['SERVER_NAME']."/visualizar/img/fotosDosUsuario/".$nome_imagem);
                $user->setIdUsuario(null);
                try {
                    if ($usuarioDAO->create($user)) {
                        header("Location: https://kimmim.shop/visualizar/html/anunciantes/login.php?cadastro=true");
                    } else {
                        header("Location: https://kimmim.shop/visualizar/html/anunciantes/cadastro.php?falha=true");
                    }
                } catch (PDOException $e) {
                    echo "Deu ruim no try";
                    echo $e->getMessage();
                }
            }

            if (count($error) != 0) {
                foreach ($error as $erro) {
                    echo $erro . "<br />";
                }
            }
        }
    }
}