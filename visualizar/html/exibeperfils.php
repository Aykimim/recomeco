<?php include 'header.php'; ?>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/controladormysql/UsuarioDAO.php";
$cidade = filter_input(INPUT_GET, "cidade");

$usuarioDAO = new UsuarioDAO();

$result=$usuarioDAO->getAllCity($cidade);

?>

<?php
foreach ($result as $user) { ?>

  <div class="card" style="width: 18rem;">
    <img src="https://<?php echo $user->fotoPerfil ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $user->nome ?></h5>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Serviço: <?php echo $user->servico ?></li>
        <li class="list-group-item">Telefone: <?php echo $user->telefone ?></li>
        <?php echo $_SERVER['SERVER_NAME']  ?>
      </ul>
      <a href="#" class="btn btn-primary">ver</a>
    </div>
  </div>
<?php } ?>

<!-- roda pe -->

<?php include 'footer.php'; ?>