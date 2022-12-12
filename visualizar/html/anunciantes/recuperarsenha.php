<?php include '../header.php'; ?>
<div class="mb-3 mt-3">
    <div class="container min-vh-100">
        <div class="row">
            <div class="formularioContato">

                <form method="post" action="//kimmim.shop/pessoamysql/emailrecuperacao.php" enctype="multipart/form-data">

                    <input type="hidden" name="subject" value="eykimim@hotmail.com" />

                    </br>
                    </br><label for="email"><span>E-mail:</span></label>
                    <input type="text" name="email" placeholder="Digite seu E-Mail:" class="fade_8S" required>
                    </br></br>

                    <input type="submit" name="acao" value="Enviar">
                    <input type="reset" value="Cancelar">

                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (!isset($_SESSION)) {
    session_start();
}

$_SESSION['id_usuario'] = $usuario['id_usuario'];
?>
<?php include '../footer.php'; ?>