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
		Erro! Você precisa preencher alguns espaços em branco.<br />
	</div>
	<div>&nbsp;</div>
<?php } ?>

Altere o e-mail pode servir para quando você mudar seu e-mail, e em que você enviar a notícia do Hotel.

<br><br>

<form method="post" action="">
<table>
<tr>
<td>Senha Atual <?php if ($error == 1) { ?> <span style="color:red; font-size:10px;">*A senha atual está incorreto.</span> <?php } ?></td>
</tr>
<tr>
<td><input type="password" name="cpassword"></td>
</tr>
<tr>
<td><span style="color:#c0bdbd;">Por questões de segurança digite a sua senha que você tem atualmente.</span><br><br></td>
</tr>
<tr>
<td><br></td>
</tr>

<tr>
<td>Nuevo Email <?php if (($error == 1) || ($error == 2)) { ?> <span style="color:red; font-size:10px;">*E-Mail Novo inválido</span> <?php } ?></td>
</tr>
<tr>
<td><input type="email" name="nemail"></td>
</tr>
<tr>
<td><span style="color:#c0bdbd;">Digite os e-mail remplazaras pela corrente.</span><br><br></td>
</tr>

<tr>
<td>Reescreva o Novo Correio<?php if (($error == 1) || ($error == 2)) { ?> <span style="color:red; font-size:10px;">*E-Mail Nova inválido</span> <?php } ?></td>
</tr>
<tr>
<td><input type="email" name="rnemail"></td>
</tr>
<tr>
<td><span style="color:#c0bdbd;">Reescreva o seu novo e-mail para ver se você não é um bot.</span><br><br></td>
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