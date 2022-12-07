<?php include 'header.php'; ?>
</br>
<h5> Contato</br>
</br>
    Autores: Eykimim Aniceto Pereira & YASMIM DUTRA COIMBRA .
</br>
    <div class="contato">

        <img src="/visualizar/img/eykimim.jpg" alt="descrição da imagem" height="200" width="200" vspace="5" hspace="4">

        <img src="/visualizar/img/yasmim.jpg" alt="descrição da imagem" height="200" width="200" vspace="5" hspace="4">

    </div>

    Para entrar em contato preencher o formulario</br>
</h5>

<div class="formularioContato">

    <form method="post" action="/pessoamysql/enviar_email.php" enctype="multipart/form-data">

        <input type="hidden" name="subject" value="eykimim@hotmail.com" />

        <label for="name"><span>Nome:</span></label></br>
        <input type="text" name="nome" placeholder="Digite seu nome:" required>


        <label for="email"><span>E-mail:</span></label></br>
        <input type="text" name="email" placeholder="Digite seu E-Mail:" class="fade_8S" required>


       <label for="msg"><span>Escreva sua mensagem:</span></label></br>
        <textarea id="mensagem" name="mensagem" rows="3"></textarea></br>


        <input type="submit" name="acao" value="Enviar">
        <input type="reset" value="Cancelar">
        <!--bolinha roda-->
        <div class="spinner-border text-secondary" role="status">
  <span class="visually-hidden">Loading...</span>
  
        //configurar
 <div id="liveAlertPlaceholder"></div>
<button type="button" class="btn btn-primary" id="liveAlertBtn">Show live alert</button>
    </form>
</div>
<?php include 'footer.php'; ?>