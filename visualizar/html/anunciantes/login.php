<?php include '../header.php'; ?>
<!-- formulario de login -->

<div class="d-flex justify-content-center footer-content">
  <div class="container">
    <div class="row ">

      <div class="mb-3 mt-3">
        <center>
          <h2>LOGIN</h2>
        </center>
      </div>

      <form action="/pessoamysql/validarlogin.php" method="post">


        <div class="mb-3">
          <label for="E-mail" class="form-label">E-mail:</label>
          <input type="text" name="email" required placeholder="exemplo@hotmil.com" id="email"  aria-describedby="nome">
        </div>

        <div class="mb-3">
          <label for="senha" class="form-label">senha</label>
          <input type="senha" name="senha" id="senha" required placeholder="senha" class="form-control" aria-describedby="senha">
        </div>

        <a href="recuperarsenha.php">
          <h7> esqueci a senha</h7>
        </a>
        <div class="mb-3 mt-3">
        <button type="submit" value="entrar" name="entrar" id="entrar" class="btn btn-success">Entrar</button>
</div>

      </form>


    </div>
  </div>
</div>
<!--fim formulario de login -->
<?php include '../footer.php'; ?>