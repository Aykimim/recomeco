<?php include 'conecao.php'; ?>

<?php

session_start ();

if ($_SESSION ['dadosMemoria'] == null) // Se não existir dados na sessão cria a
                                        // sessão para armazenar os dados
    $_SESSION ['dadosMemoria'] = $_POST;

extract ( $_SESSION ['dadosMemoria'] ); // Extrai dados da sessão
                                        

// Consulta banco em busca de dados semelhantes aos digitados
$consulta = $pdo->query ( 'SELECT * FROM Usuario WHERE cpf = ' . $cpf . ' OR matricula = ' . $matricula . ' OR rg = ' . $rg );



if ($forcarCadastro != "S") { // Verifica se usuário mandou forçar o cadastro
    if ($consulta->rowCount () > 0) { // Verifica se existe cadastro semelhante
                                      
        // Exibe mensagem notificadora e pergunta se deseja forçar o cadastro
        echo 'Já existe(m) cadastro(s) semelhante(s) a esse:';
        foreach ( $consulta as $resultado ) {
            echo '<br/>', $resultado ['nome'];
        }
        echo 'Deseja continuar? <form action="' . $_SERVER ['PHP_SELF'] . '"><input type="submit" name="forcarCadastro" value="S" /></form>';
        $cadastrar = false;
    }

}





$gera = rand(1,100);

$email = filter_input(INPUT_POST,"email");

$email = $_POST['email'];

$formcontent="codigo de recuperacao da sua conta: $gera ";
$recipient = "$email";
$subject = "mao amiga";
$mailheader = "De: kimmim@kimmim.shop";
mail($recipient, $subject, $formcontent, $mailheader) or die("Erro!");

//function_alert("Mensagem enviada com sucesso");

//function function_alert($msg) {
//    echo "<script type='text/javascript'>alert('$msg');</script>";
//}
//header("Location: ".$_SERVER['HTTP_REFERER']."");
