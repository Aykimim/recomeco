<?php

$nome= $_POST['nome'];
$email = $_POST['email'];
$mensagem= $_POST['mensagem'];
$formcontent="De: $email \nMensagem enviada por: $nome \nReclamação: $mensagem ";
//$recipient = "kimmim@kimmim.shop";
$recipient = "eykimim@hotmail.com";
$subject = "Reclamação do mao amiga";
$mailheader = "De: $email";
mail($recipient, $subject, $formcontent, $mailheader) or die("Erro!");

function_alert("Mensagem enviada com sucesso");

function function_alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
header("Location: ".$_SERVER['HTTP_REFERER']."");
?>  