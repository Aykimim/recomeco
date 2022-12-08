<?php

$gera = rand(1,100);

//<<<<<<< HEAD

$email = filter_input(INPUT_POST,"email");
//=======
$email = $_POST['email'];
//>>>>>>> 699538012bc511450113ff47b53acc6e019179c9
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
?>

