<?php include 'header.php'; ?>
<h5> Contato</br>

    Autores: Eykimim Aniceto Pereira & YASMIM DUTRA COIMBRA .</br>
    <div class="contato">

        <img src="visualizar/img/eykimim.jpg" alt="descrição da imagem" height="200" width="200" vspace="5" hspace="4">

        <img src="visualizar/img/yasmim.jpg" alt="descrição da imagem" height="200" width="200" vspace="5" hspace="4">

    </div>

    Para entrar em contato preencher o formulario</br>
</h5>

<div class="formularioContato">

    <form method="post" action="enviar_email.php" enctype="multipart/form-data">

        <input type="hidden" name="subject" value="eykimim@hotmail.com" />

        </br><label for="name"><span>Nome:</span></label>
        <input type="text" name="nome" placeholder="Digite seu nome:" required>


        </br><label for="email"><span>E-mail:</span></label>
        <input type="text" name="email" placeholder="Digite seu E-Mail:" class="fade_8S" required>


        <!-- <div>
        <label for="msg">Telefone:</label>
        <input type="text" id="telefone"name="usuario_tel"placeholder="Digite seu Telefone"> 
    </div>-->


        </br><label for="msg"><span>Escreva sua mensagem:</span></label>
        <textarea id="mensagem" name="mensagem" rows="3"></textarea></br>


        <input type="submit" name="acao" value="Enviar">
        <input type="reset" value="Cancelar">

    </form>
</div>
<?php include 'footer.php'; ?>