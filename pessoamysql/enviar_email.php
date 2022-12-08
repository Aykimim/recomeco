<?php
$nome= filter_input(INPUT_POST,"nome");
$email = filter_input(INPUT_POST,"email");
$mensagem= filter_input(INPUT_POST,"mensagem");
$formcontent="De: $email \nMensagem enviada por: $nome \nReclamação: $mensagem ";
//$recipient = "kimmim@kimmim.shop";
//$recipient = "eykimim@hotmail.com";
//$recipient = "1910415@sempre.unifacig.edu.br";
$recipient = "2110112@sempre.unifacig.edu.br ";
$subject = "Reclamação do mao amiga";
$mailheader = "De: $email";
mail($recipient, $subject, $formcontent, $mailheader) or die("Erro!");

function_alert("Mensagem enviada com sucesso");

function function_alert($msg) {
echo "<script type='text/javascript'>alert('$msg');</script>";
}
//header("Location: ".$_SERVER['HTTP_REFERER']."");
header("location:/visualizar/html/contato.php")
?>  
<?php //?>