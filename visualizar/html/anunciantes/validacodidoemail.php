<?php include '../header.php'; ?>4
<div class="formularioContato">

	<form method="post" action="/cotroladormysql/emailrecuperacao.php" enctype="multipart/form-data" >

		<input type="hidden" name="subject"  value="eykimim@hotmail.com" />


        </br><label for="email"><span>E-mail:</span></label>
        <input type="text" name="email"placeholder="Digite seu E-Mail:" class="fade_8S" required>
 

       <input type="submit" name="acao" value="Enviar">
       <input type="reset" value="Cancelar">

            </form>
    </div>
//<<<<<<< HEAD
    
//=======


    <form>
  <div class="mb-3">
  <form method="post" action="/cotroladormysql/emailrecuperacao.php" enctype="multipart/form-data" > 
       
    <label for="exampleInputEmail1" class="form-label">Digite seu E-Mail:/label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Para enviar o codigo</div>
  </div>
 
  <button type="submit" class="btn btn-primary">Enviar</button>
  <button type="reset" value="Cancelar"class="btn btn-primary">Enviar</button>
</form>
//>>>>>>> 699538012bc511450113ff47b53acc6e019179c9
<?php include '../footer.php'; ?>