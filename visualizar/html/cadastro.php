<?php include 'header.php'; ?>
	<div id="cadastro">
    	<form name="cadastro" method="post" enctype="multipart/form-data" action="/cotroladormysql/salvarcadastro.php">
    		<table id="tab_cadastro">
            	<tr>    
                    <td>Foto:</td>
                    <td><input type="file" name="foto" required placeholder="Foto de Perfil" id="foto" class="txt" /></td>
                </tr>
                <tr>
                	<td>Nome:</td>
                    <td><input type="text" name="nome" required placeholder="Nome" id="nome" class="txt" /></td>
                </tr>
                <tr>
                	<td>Nome exibido:</td>
                    <td><input type="text" name="nomeexibido" required placeholder="Nome a ser mostrado" id="nomeexibido" class="txt" /></td>
                </tr>
                <tr>    
                    <td>E-mail:</td>
                    <td><input type="text" name="email" required placeholder="E-mail" id="email" class="txt" /></td>
                </tr>
                
                <tr>    
                    <td>biogragia:</td>
                    <td><input type="text" name="biografia" required placeholder="biografia" id="biografia" class="txt" /></td>
                </tr>
                <tr>    
                    <td>cidade:</td>
                    <td>
                    <select name="cidade">
                    <option value="Manhuacu">Manhuaçu</option>
                    <option value="Manhumirim">Manhumirim</option>
                    <option value="Simonesia">Simonesia</option>
                    </select>
                </td>
                </tr>
                <tr>    
                    <td>telefone:</td>
                    <td><input type="text" name="telefone" required placeholder="telefone" id="telefone" class="txt" /></td>
                </tr>
                <tr>    
                     <td>servico:</td>
                    <td><input type="text" name="servico" required placeholder="servico" id="servico" class="txt" /></td>
                </tr>
                
                <tr>    
                    <td>Senha:</td>
                    <td><input type="text" name="senhacd" required placeholder="Senha" id="senhacd" class="txt" /></td>
                </tr>
                
                <tr>
                    <td>Confirmar Senha:</td> 
                    <td> <input type="password" name="csenha" required placeholder="Confirmar Senha" id="senhacd" class="txt" /></td>
                </tr>
                 
                <!-- Conteúdo https://rafaelcouto.com.br/upload-simples-de-imagem-com-php-mysql/-->
                <tr>    
                    <td colspan="2"><input type="submit" value="Cadastrar" name="cadastrar" id="botao_cad"></td>
                </tr>
            </table>
        </form>
    </div>
    <?php include 'footer.php'; ?>