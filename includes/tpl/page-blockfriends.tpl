<div class="habblet-container" style="float:left; width: 560px;"> 
<div class="cbb clearfix settings"> 
 
<h2 class="title">Bloquear pedidos de amizade</h2> 
<div class="box-content"> 

<?php if ($updateResult == 1) { ?>
	<div class="rounded rounded-green">
		Pronto! Configura��es atualizadas!<br />
	</div>
	<div>&nbsp;</div>
<?php } ?>

<?php if ($updateResult == 2) { ?>
	<div class="rounded rounded-red">
		Erro! Verifique seus dados!<br />
	</div>
	<div>&nbsp;</div>
<?php } ?>

Aqui voc� pode mudar a configura��o de pedidos de seus amigos, voc� pode impedir que voc� enviar peti��es, bem como ativ�-las novamente, por raz�es de seguran�a voc� deve saber a senha atual para verificar se voc� � o propriet�rio dessa conta.

<br>
<br>

<form method="post" action="">
<table>
<tr>
<td>CSenha atual <?php if ($error == 1) { ?> <span style="color:red; font-size:10px;">* A senha n�o corresponde ou � inv�lida.</span> <?php } ?></td>
</tr>
<tr>
<td><input type="password" name="cpassword"></td>
</tr>
<tr>
<td><span style="color:#c0bdbd;">Digite a senha atual, por raz�es de seguran�a.</span><br><br></td>
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
<td><span style="color:#c0bdbd;">Por favor, selecione a op��o desejada.</span><br><br></td>
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
<td><span style="color:#c0bdbd;">Por favor, confirme sua a��o.</span><br><br></td>
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