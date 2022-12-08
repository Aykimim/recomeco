<?php

$usuario = filter_input(INPUT_GET,"usuario");
$usuarioDAO = new UsuarioDAO();
$resultuser = usuarioDAO->getoneuser($usuario);

$comentarios = filter_input(INPUT_GET,"comentario");
$usuarioDAO = new UsuarioDAO();
$resultcoment = ComentariosDAO->getAllComentario($Usuario_idUsuario);

?>

<?php 

foreach($resultuser as $user){?>
<div class="card" style="width: 18rem;">
  <img src="$user->fotoPerfil" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">$user->nome</h5>

    <p class="card-text">$user->servico</p>
    <a href="#" class="btn btn-primary">ver</a>
  </div>
</div>



<?php } ?>

<?php 
foreach($resultcoment as $user){?>
<div class="card" style="width: 18rem;">
  <img src="$user->fotoPerfil" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">$user->nome</h5>

    <p class="card-text">$user->comentarios</p>
    <a href="#" class="btn btn-primary">ver</a>
  </div>
</div>


<?php } ?>