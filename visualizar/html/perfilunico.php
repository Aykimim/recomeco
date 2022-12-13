<?php include 'header.php'; ?>
<?php
//olha eu daqui
$enviado = filter_input(INPUT_GET, "enviado");
$falha = filter_input(INPUT_GET, "falha");


if (isset($falha)) { ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Comentario não enviado</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>


<?php }

if (isset($enviado)) { ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Comentario enviado</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>


<?php } //ate aqui
?>

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/controladormysql/UsuarioDAO.php";

$idUsuario = filter_input(INPUT_GET, "idUsuario");

$usuarioDAO = new UsuarioDAO();

if (isset($idUsuario)) {
  try {
    $user = $usuarioDAO->getOne($idUsuario);
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}
?>
<?php
//olha eu

include_once $_SERVER['DOCUMENT_ROOT'] . "/controladormysql/ComentarioDAO.php";
$Usuario_idUsuario = filter_input(INPUT_GET, "Usuario_idUsuario");

$ComentariosDAO = new ComentariosDAO();

$result = $ComentariosDAO->getAllComent($Usuario_idUsuario);


//ate aqui
?>



<div class="container">
  <div class="row">


    <div class="card mb-3">

      <div class="card-body">

        <h5 class="card-title"><?php echo $user->nome ?></h5>

        <div class="mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">

              <img src="<?php echo $user->fotoPerfil ?>" class="img-fluid rounded-start" alt="...">


            </div>
          </div>
        </div>

        <li class="list-group-item">Servico: <?php echo $user->servico ?></li>
        <li class="list-group-item">Biografia: <?php echo $user->biografia ?></li>
        <li class="list-group-item">Email: <?php echo $user->email ?></li>
        <li class="list-group-item">Telefone: <?php echo $user->telefone ?></li>


      </div>
    </div>

    <form name="comentario" method="post" enctype="multipart/form-data" action="//kimmim.shop/service/comentarioService.php>
        
  <div class=" mb-3">
      <label for="nome" class="form-label">Nome:</label>
      <input type="text" class="form-control" id="nome" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="comentario" class="form-label">Comentario:</label>
    <input type="text" class="form-control" id="comentario">
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
  </form>




  <div class="mb-3 mt-3">
    <div class="card">
      <div class="card-header">
        Nome:<?php echo $Nomecoment ?>
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>
            <li class="list-group-item">Comentario:<?php echo $comentario ?></li>
          </p>
        </blockquote>
      </div>
    </div>
  </div>


</div>
</div>


<!-- roda pe -->

<?php include 'footer.php'; ?>