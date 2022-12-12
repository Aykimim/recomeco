<?php include 'header.php'; ?>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/controladormysql/UsuarioDAO.php";
$cidade = filter_input(INPUT_GET, "cidade");

$usuarioDAO = new UsuarioDAO();

$result = $usuarioDAO->getAllCity($cidade);

?>
<div class="mb-3 mt-3">
  <center>
    <h2><?php echo $cidade ?></h2>
  </center>
</div>

<div class="container">
  <div class="row">
    <?php
    foreach ($result as $user) { ?>
      <div class="col-md-6">

        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="<?php echo $user->fotoPerfil ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?php echo $user->nome ?></h5>
                <li class="list-group-item">Serviço: <?php echo $user->servico ?></li>
                <li class="list-group-item">Telefone: <?php echo $user->telefone ?></li>
                <a href="perfilunico.php?idUsuario=<?php echo $user->idUsuario ?>" class="btn btn-primary">ver</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>

  </div>
</div>


<!-- roda pe -->

<?php include 'footer.php'; ?>