<?php include '../header.php'; ?>

<?php
$falha = filter_input(INPUT_GET, "falha");


if (isset($falha)) { ?>

  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Falha!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

<?php } ?>

<div class="container">
  <div class="row ">
    <div class="mb-3 mt-3">
      <center>
        <h2>Cadastre-se</h2>
      </center>
    </div>


    <form name="cadastro" method="post" enctype="multipart/form-data" action="//kimmim.shop/service/anuncianteService.php">

      <div class="mb-3">
        <label for="foto" class="form-label">Foto de perfil:</label>
        <input type="file" name="foto" required placeholder="Foto" id="foto" class="form-control">
      </div>
      <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" required placeholder="Nome" id="nome" class="form-control" aria-describedby="nome">
      </div>

      <div class="mb-3">
        <label for="nomeexibido" class="form-label">Usuario:</label>
        <input type="text" name="usuario" required placeholder="Usuario" id="usuario" class="form-control" aria-describedby="nome">
      </div>


      <div class="mb-3">
        <label for="E-mail" class="form-label">E-mail:</label>
        <input type="text" name="email" required placeholder="exemplo@hotmil.com" id="email" class="form-control" aria-describedby="nome">
      </div>

      <div class="mb-3">
        <label for="biogragia" class="form-label">biografia:</label>
        <input type="text" name="biografia" required placeholder="biografia" rows="3" id="biografia" class="form-control" aria-describedby="nome">
      </div>
      <label for="cidade" class="form-label">cidade:</label>
      <select class="form-select" aria-label="cidade" name="cidade" id="cidade">
        <option selected>cidade:</option>
        <option value="Manhuacu">Manhuacu</option>
        <option value="Manhumirim">Manhumirim</option>
        <option value="Simonesia">Simonesia</option>
      </select>

      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">telefone:</label>
        <input type="text" name="telefone" required placeholder="(00) 0 0000-0000" id="telefone" class="form-control" aria-describedby="nome">
      </div>

      <div class="mb-3">
        <label for="servico" class="form-label">serviço:</label>
        <input type="text" name="servico" rows="3" required placeholder="serviço" id="servico" class="form-control" aria-describedby="nome">
      </div>


      <div class="mb-3">
        <label for="senha" class="form-label">senha</label>
        <input type="password" name="senha" required placeholder="Senha" id="senha" class="form-control" aria-describedby="nome">
        <!--olha eu-->
        <div id="senha" class="form-text"> Sua senha deve ter de 8 a 20 caracteres, conter letras e números e não deve
          conter espaços, caracteres especiais ou emoji. </div>
      </div>

      <div class="mb-3">
        <label for="senhaconf" class="form-label">Confirmar Senha</label>
        <input type="password" name="senhaconf" required placeholder="Confirmar Senha" id="senhaconf" class="form-control" aria-describedby="nome">
        <!--olha eu-->
      </div>

      <!--olha eu-->
      <div class="mb-3 form-check">
        <!--<input type="checkbox" class="form-check-input" id="ternos">
        <label class="form-check-label" for="ternos">Ainda não tem ternos para concordar</label> -->
        <label for="termosaceito" class="form-label">Escreva "Aceito" para aceitar termos e condições</label>
        <input type="text" required placeholder="Aceito" id="ternos">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          TERMOS E CONDIÇÕES
        </button>
        <!--cabo olha eu-->
      </div>

      <div class="mb-3">
        <input type="text" name="action" id="action" value="cadastrar" hidden>
        <button type="submit" value="Cadastrar" name="cadastrar" id="cadastrar" class="btn btn-success">Cadastrar</button>

        <button type="reset" value="Cancelar" class=" btn btn-danger">Cancelar</button><!-- colocar o cancelar do lado do cadastrar e uma ideia muito boa -->
    </form>
  </div>
</div>
</div>
<!--olha eu-->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Termos e condições</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php include 'termos.txt'; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fechar</button>

      </div>
    </div>
  </div>
</div>
<!--cabo olha eu-->
<?php include '../footer.php'; ?>