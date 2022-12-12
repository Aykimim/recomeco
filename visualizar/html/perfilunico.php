<?php include 'header.php'; ?>
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
        
  <div class="mb-3">
    <label for="Nomecoment" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="Nomecoment" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="Comentario" class="form-label">Comentario:</label>
    <input type="text" class="form-control" id="Comentario">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
    
    
    
<div class="mb-3 mt-3">    
    <div class="card">
      <div class="card-header">
       Nome:<?php echo $Nomecoment ?>
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p><li class="list-group-item">Comentario:<?php echo $comentario ?></li></p>
        </blockquote>
      </div>
    </div>
  </div>   


  </div>
</div>


<!-- roda pe -->

<?php include 'footer.php'; ?>