<?php include '../header.php'; ?>

<center><h2>Catastre-se</h2></center>

	<div id="cadastro">
    	<form name="cadastro" method="post" enctype="multipart/form-data" action="/cotroladormysql/salvarcadastro.php">
    		<table id="tab_cadastro">
</br>
            	<tr>    
                    <td>Foto de perfil:</td>
                    <td><input type="file" name="foto" required placeholder="Foto de Perfil" id="foto" class="txt" /></td>
                </tr>
                <tr>
                	<td>Nome:</td>
                    <td><input type="text" name="nome" required placeholder="Nome" id="nome" class="txt" /></td>
                </tr>
                <tr>
                	<td>SobreNome:</td>
                    <td><input type="text" name="sobrenome" required placeholder="sobrenome" id="nome" class="txt" /></td>
                </tr>
                <tr>
                <tr>
                    <tr>
                	<td>Nome:</td>
                    <td><input type="text" name="nome" required placeholder="Nome" id="nome" class="txt" /></td>
                </tr>
                <tr>
                	<td>Nome exibido:</td>
                    <td><input type="text" name="usuarios" required placeholder="Nome a ser mostrado" id="nomeexibido" class="txt" /></td>
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
                    <td><input type="text" name="senha" required placeholder="Senha" id="senhacd" class="txt" /></td>
                </tr>
                
                <tr>
                    <td>Confirmar Senha:</td> 
                    <td> <input type="password" name="senhaconf" required placeholder="Confirmar Senha" id="senhacd" class="txt" /></td>
                </tr>
                </br>
                <tr>    
                    <td colspan="2"><input type="submit" value="Cadastrar" name="cadastrar" id="botao_cad"></td>
                    <td colspan="2"><input type="reset" value="Cancelar"></td>
                </tr>
                </br>
            </br>
            </table>
        </form>
    </div>

    <?php include '../footer.php'; ?>