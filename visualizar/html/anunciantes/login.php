<?php include '../header.php'; ?>
<!-- formulario de login -->
<div class="d-flex justify-content-center footer-content  footer-bottom">
 <h1>LOGIN</h1></br>
 <form action="/pessoamysql/validarlogin.php" method="post">
 
 </br>
     <label>Email : </label>
     <input type="text" name="email" id="email"  /><br />
 
     <label>Senha :</label>
      <input type="password" name="senha" id="senha" /><br />
 
      <button type="submit">Entrar</button>
      </br>
 </form>
 <div class="footer-content">
</div>
</br>
            <a href="recuperarsenha.php"><p>  esqueci a senha</p></a>
            </br>

</div>
<!--fim formulario de login -->
<?php include '../footer.php'; ?>