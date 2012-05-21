<div class="habblet-container" style="float:left; width: 560px;"> 
<div class="cbb clearfix settings"> 
 
<h2 class="title">Bloquear pedidos de amizade</h2> 
<div class="box-content"> 

<?php if ($updateResult == 1) { ?>
	<div class="rounded rounded-green">
		Pronto! Configurações atualizadas!<br />
	</div>
	<div>&nbsp;</div>
<?php } ?>

<?php if ($updateResult == 2) { ?>
	<div class="rounded rounded-red">
		Erro! Verifique seus dados!<br />
	</div>
	<div>&nbsp;</div>
<?php } ?>

Aqui você pode mudar a configuração de pedidos de seus amigos, você pode impedir que você enviar petições, bem como ativá-las novamente, por razões de segurança você deve saber a senha atual para verificar se você é o proprietário dessa conta.

<br>
<br>

<form method="post" action="">
<table>
<tr>
<td>CSenha atual <?php if ($error == 1) { ?> <span style="color:red; font-size:10px;">* A senha não corresponde ou é inválida.</span> <?php } ?></td>
</tr>
<tr>
<td><input type="password" name="cpassword"></td>
</tr>
<tr>
<td><span style="color:#c0bdbd;">Digite a senha atual, por razões de segurança.</span><br><br></td>
</tr>
<tr>
<td></td>
</tr>

<tr>
<td> </td>
</tr>
<tr>
<td>Pedidos de amizade</td>
</tr>

<tr>
<td><select name="block">
  	<option value="1">Bloquear</option>
  	<option value="0">Desbloquear</option>
 	</select></td>
</tr>

<tr>
<td><span style="color:#c0bdbd;">Por favor, selecione a opção desejada.</span><br><br></td>
</tr>

<tr>
<td>Confirmar</td>
</tr>
   
<tr>
<td><select name="rblock">
  	<option value="1">Bloquear</option>
  	<option value="0">Desbloquear</option>
  	</select></td>
</tr>
<tr>
<td><span style="color:#c0bdbd;">Por favor, confirme sua ação.</span><br><br></td>
</tr>



<tr>
<td><i></i></td>
</tr>
</table>
<p align="right"><a href="#" id="settings-submit" class="new-button green-button enabled-button"><b>Salvar cambios</b><i></i></a></p>
</form>

<br />

            	
</div> 

</div> 
</div> 