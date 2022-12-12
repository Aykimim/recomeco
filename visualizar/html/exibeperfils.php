<?php include 'header.php'; ?>

<?php

$cidade = filter_input(INPUT_GET,"cidade");

$usuarioDAO = new UsuarioDAO();

$result = $user->getAllCity($cidade);
?>

<?php 
foreach($result as $user){?>

<div class="card" style="width: 18rem;">
  <img src="$user->fotoPerfil" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $user->nome ?></h5>

    <p class="card-text"><?php echo $user->servico?></p>
    <a href="#" class="btn btn-primary">ver</a>
  </div>
</div>
<?php } ?>

<?php include 'footer.php'; ?>

