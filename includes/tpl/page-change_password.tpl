<div class="habblet-container" style="float:left; width: 560px;"> 
<div class="cbb clearfix settings"> 
 
<h2 class="title">Trocar Senha</h2> 
<div class="box-content"> 

<?php if ($updateResult == 1) { ?>
	<div class="rounded rounded-green">
		Pronto! Senha foi trocada!<br />
	</div>
	<div>&nbsp;</div>
<?php } ?>

<?php if ($updateResult == 2) { ?>
	<div class="rounded rounded-red">
		Erro! Voc� precisa preencher alguns espa�os em branco.<br />
	</div>
	<div>&nbsp;</div>
<?php } ?>

Alterar a senha que voc� pode ir um longo, como quando algu�m disse isso e voc� tem mudan�a de confian�a, ...

<br><br>

<form method="post" action="">
<table>
<tr>
<td>Senha atual <?php if ($error == 1) { ?> <span style="color:red; font-size:10px;">* A senha atual n�o � v�lida.</span> <?php } ?></td>
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
<td>Nova senha <?php if (($error == 1) || ($error == 2)) { ?> <span style="color:red; font-size:10px;">* Senha invalida</span> <?php } ?></td>
</tr>
<tr>
<td><input type="password" name="npassword"></td>
</tr>
<tr>
<td><span style="color:#c0bdbd;">Digite sua nova senha <?php echo $min; ?>-<?php echo $max; ?> digitos.</span><br><br></td>
</tr>

<tr>
<td>Reescreva a nova senha <?php if (($error == 1) || ($error == 2)) { ?> <span style="color:red; font-size:10px;">* Senha Invalida</span> <?php } ?></td>
</tr>
<tr>
<td><input type="password" name="rnpassword"></td>
</tr>
<tr>
<td><span style="color:#c0bdbd;">Redigite sua nova senha para ver se voc� n�o � um bot.</span><br><br></td>
</tr>

<tr>
<td><input type="submit" name="submit"></td>
</tr>
</table>
</form>
            	
</div> 

</div> 
</div> 