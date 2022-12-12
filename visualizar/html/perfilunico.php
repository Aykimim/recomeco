<?php include 'header.php'; ?>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . "/controladormysql/UsuarioDAO.php";

$idUsuario = filter_input(INPUT_GET, "idUsuario");

$usuarioDAO = new UsuarioDAO();

if(isset($idUsuario)){
  $user = $usuarioDAO->getOne($idUsuario);
}

?>


<div class="container">
  <div class="row">



      <div class="card mb-3">
        <img src="<?php echo $user->fotoPerfil ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $user->nome ?></h5>


          <li class="list-group-item">Serviço: <?php echo $user->servico ?></li>
          <li class="list-group-item">Telefone: <?php echo $user->biografia ?></li>
          <li class="list-group-item">Serviço: <?php echo $user->email ?></li>
          <li class="list-group-item">Telefone: <?php echo $user->telefone ?></li>


        </div>
      </div>




  </div>
</div>


<!-- roda pe -->

<?php include 'footer.php'; ?>