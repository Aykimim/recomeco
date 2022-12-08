<?php include '../header.php'; ?>
<!-- formulario de login -->
<div class="d-flex justify-content-center footer-content  footer-bottom">
  <h1>LOGIN</h1></br>
  <form action="/pessoamysql/validarlogin.php" method="post">

    </br>
    <div class="mb-3">
      <label for="E-mail" class="form-label">E-mail:</label>
      <input type="text" name="email" required placeholder="exemplo@hotmil.com" id="email" class="form-control"
        aria-describedby="nome">
    </div>

    <div class="mb-3">
      <label for="senha" class="form-label">senha</label>
      <input type="senha" name="senha" id="senha" class="form-control" aria-describedby="senha">
    </div>

    <button type="submit" value="entrar" name="entrar" id="entrar" class="btn btn-success">Entrar</button>

    </br>
  </form>

  </br>
  <a href="recuperarsenha.php">
    <p> esqueci a senha</p>
  </a>
  </br>

</div>
<!--fim formulario de login -->
<?php include '../footer.php'; ?>