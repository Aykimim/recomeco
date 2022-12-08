<?php include '../header.php'; ?>

<div class="container">
  <div class="row ">
    <div class="mb-3 mt-3"><center><h2>Catastre-se</h2></center></div>
      
    
    <form name="cadastro" method="post" enctype="multipart/form-data" action=".../pessoamysql/validarlogin.php">

      <div class="mb-3">
        <label for="foto" class="form-label">Foto de perfil:</label>
        <input type="file" name="foto" required placeholder="Foto" id="foto" class="form-control">
      </div>
      <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" required placeholder="Nome" id="nome" class="form-control" aria-describedby="nome">
      </div>

      <div class="mb-3">
        <label for="nomeexibido" class="form-label">Nome exibido:</label>
        <input type="text" name="usuarios" required placeholder="Nome a ser mostrado" id="nomeexibido" class="form-control aria-describedby="nome">
      </div>


      <div class="mb-3">
        <label for="E-mail" class="form-label">E-mail:</label>
        <input type="text" name="email" required placeholder="exemplo@hotmil.com" id="email" class="form-control" aria-describedby="nome">
      </div>

      <div class="mb-3">
        <label for="biogragia" class="form-label">biogragia:</label>
        <input type="text" name="biografia" required placeholder="biografia" rows="3" id="biografia" class="form-control" aria-describedby="nome">
      </div>
      <label for="cidade" class="form-label">cidade:</label>
      <select class="form-select" aria-label="cidade">
        <option selected>cidade:</option>
        <option value="Manhuacu">Manhuacu</option>
        <option value="Manhuacu">Manhuacu</option>
        <option value="Simonesia">Simonesia</option>
      </select>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">telefone:</label>
        <input type="text" name="telefone" required placeholder="(00) 0 0000-0000" id="telefone" class="form-control" aria-describedby="nome">
      </div>

      <div class="mb-3">
        <label for="servico" class="form-label">serviço:</label>
        <input type="text" name="servico" rows="3" required  placeholder="serviço" id="servico" class="form-control" aria-describedby="nome">
      </div>


      <div class="mb-3">
        <label for="senha" class="form-label">senha</label>
        <input type="senha" name="senha" id="senha" class="form-control" aria-describedby="senha">
        <div id="senha" class="form-text"> Sua senha deve ter de 8 a 20 caracteres, conter letras e números e não deve
          conter espaços, caracteres especiais ou emoji. </div>
      </div>

      <div class="mb-3">
        <label for="senha" class="form-label">Confirmar Senha</label>
        <input type="password" name="senhaconf" required placeholder="Confirmar Senha" id="senhaconf" class="form-control" aria-describedby="senha">
      </div>

      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="ternos">
        <label class="form-check-label" for="ternos">Ainda não tem ternos para concordar</label>
      </div>
      <div class="mb-3">
      <button type="submit" value="Cadastrar" name="cadastrar" id="cadastrar" class="btn btn-success">Cadastrar</button>
      <button type="reset" value="Cancelar" class=" btn btn-danger">Cancelar</button>
     </form> 
    </div>
  </div>
</div>
<?php include '../footer.php'; ?>