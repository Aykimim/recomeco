<?php include 'header.php'; ?>
<!-- formulario de login -->
 	
 <h1>LOGIN</h1></br>
 <form action="/pessoamysql/validarlogin.php" method="post">
 

     <label>Email : </label>
     <input type="text" name="email" id="email"  /><br />
 
     <label>Senha :</label>
      <input type="password" name="senha" id="senha" /><br />
 
      <button type="submit">Entrar</button>

 </form>
 <div class="footer-content">
            
            <a href="/visualizar/html/recuperarsenha.php"><p>  esqueci a senha</p></a>
</div>
<!--fim formulario de login -->
<?php include 'footer.php'; ?>