<div class="habblet-container" style="float:left; width: 560px;"> 
<div class="cbb clearfix settings"> 
 
<h2 class="title">Trocar E-Mail</h2> 
<div class="box-content"> 

<?php if ($updateResult == 1) { ?>
	<div class="rounded rounded-green">
		Pronto! Seu email foi atualizado!<br />
	</div>
	<div>&nbsp;</div>
<?php } ?>

<?php if ($updateResult == 2) { ?>
	<div class="rounded rounded-red">
		Erro! Voc� precisa preencher alguns espa�os em branco.<br />
	</div>
	<div>&nbsp;</div>
<?php } ?>

Altere o e-mail pode servir para quando voc� mudar seu e-mail, e em que voc� enviar a not�cia do Hotel.

<br><br>

<form method="post" action="">
<table>
<tr>
<td>Senha Atual <?php if ($error == 1) { ?> <span style="color:red; font-size:10px;">*A senha atual est� incorreto.</span> <?php } ?></td>
</tr>
<tr>
<td><input type="password" name="cpassword"></td>
</tr>
<tr>
<td><span style="color:#c0bdbd;">Por quest�es de seguran�a digite a sua senha que voc� tem atualmente.</span><br><br></td>
</tr>
<tr>
<td><br></td>
</tr>

<tr>
<td>Nuevo Email <?php if (($error == 1) || ($error == 2)) { ?> <span style="color:red; font-size:10px;">*E-Mail Novo inv�lido</span> <?php } ?></td>
</tr>
<tr>
<td><input type="email" name="nemail"></td>
</tr>
<tr>
<td><span style="color:#c0bdbd;">Digite os e-mail remplazaras pela corrente.</span><br><br></td>
</tr>

<tr>
<td>Reescreva o Novo Correio<?php if (($error == 1) || ($error == 2)) { ?> <span style="color:red; font-size:10px;">*E-Mail Nova inv�lido</span> <?php } ?></td>
</tr>
<tr>
<td><input type="email" name="rnemail"></td>
</tr>
<tr>
<td><span style="color:#c0bdbd;">Reescreva o seu novo e-mail para ver se voc� n�o � um bot.</span><br><br></td>
</tr>

<tr>
<td><input type="submit" name="submit"></td>
</tr>
</table>
</form>
            	
</div> 
</tr>
<tr>

</div> 
</div> 