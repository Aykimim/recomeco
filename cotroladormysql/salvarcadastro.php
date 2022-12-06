<?php
    if(isset($_POST["button"])) {
        $nome       = $_POST["nome"];
        $nomeexibido  = $_POST["nomeexibido"];
        $email      = $_POST["email"];
        $senha      = $_POST["senhacd"];
        $senha      = $_POST["senhacd"];
        $csenha     = $_POST["csenha"];

        $biografia = $_POST['biografia'];
         $cidade = $_POST['cidade'];
          $servico = $_POST['servico'];
         $telefone = $_POST['telefone'];
        $foto = $_FILES['foto'];

        if($nome == "" || $sobrenome == "" || $email == "" || $senha == "" || $csenha == "") {
            echo "<script> alert('Preencha todos os campos!'); </script>";
            return true;
        }
        if ($senha != $csenha) {
            echo "<script> alert('As senhas devem ser iguais!'); </script>";
            return true;
        }   

        $select = $mysqli->query("SELECT * FROM usuarios WHERE Email='$email'");
        if($select) {
        $row = $select->num_rows;
        if($row > 0) {
            echo "<script> alert('Já existe um usuário com esse e-mail'); </script>";
        } else {
            $insert = $mysqli->query("INSERT INTO `usuarios`(`nome`, `sobrenome`, `email`, `senha`) VALUES ('$nome', '$sobrenome', '$email', '$senha')");
        if($insert) {
            echo "<script> alert('Usuário registrado com sucesso!'); location.href = 'cadastrou.php' </script>";
        }   else {
                echo $mysqli->error;
            }   
        }
    }   else{
    echo $mysqli->error;

    }   

}       
?>