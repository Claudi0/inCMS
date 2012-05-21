<?php
if(!defined('NOWHOS'))
{
	define('NOWHOS', true);
}
define('Xukys', true);
require_once '../global.php';

if(!LOGGED_IN)
{
	header('Location: '.WWW.'/');
	die();
}

if(isset($_POST['maxlength']) && isset($_POST['skin']) && isset($_POST['noteText']) && isset($_POST['scope']))
{
	$skin = $gtfo->cleanWord($_POST['skin']);
	$maxlenght = $gtfo->cleanWord($_POST['maxlength']);
	$noteText = $gtfo->cleanWord($_POST['noteText']);
	$scope = $gtfo->cleanWord($_POST['scope']);
}


?>

<form action="#" method="post" id="webstore-notes-form">

<input type="hidden" name="maxlength" id="webstore-notes-maxlength" value="500" />

<div id="webstore-notes-counter">500</div>

<p>
	<select id="webstore-notes-skin" name="skin">
			<option value="8" id="webstore-notes-skin-hc_pillowskin">Almohada</option>
			<option value="5" id="webstore-notes-skin-notepadskin">Bloc de notas</option>
			<option value="2" id="webstore-notes-skin-speechbubbleskin">Bocadillo de di�logo</option>
			<option value="6" id="webstore-notes-skin-goldenskin">Dorado</option>
			<option value="3" id="webstore-notes-skin-metalskin">Metal</option>
			<option value="7" id="webstore-notes-skin-hc_machineskin">M�quina</option>
			<option value="4" id="webstore-notes-skin-noteitskin">Nota-etiqueta</option>
			<option value="1" id="webstore-notes-skin-defaultskin">Por defecto</option>
	</select>
</p>

<p class="warning">�Aviso! Este texto no se puede editar despu�s de que hayas colocado la nota en tu p�gina.</p>

<div id="webstore-notes-edit-container">
<textarea id="webstore-notes-text" rows="7" cols="42" name="noteText"><?php if(isset($noteText)) { echo fixText($core->BBcode($noteText), false, false, true, false, true); } ?></textarea>
    <script type="text/javascript">
        bbcodeToolbar = new Control.TextArea.ToolBar.BBCode("webstore-notes-text");
        bbcodeToolbar.toolbar.toolbar.id = "bbcode_toolbar";
        var colors = { "red" : ["#d80000", "Rojo"],
            "orange" : ["#fe6301", "Naranja"],
            "yellow" : ["#ffce00", "Amarillo"],
            "green" : ["#6cc800", "Verde"],
            "cyan" : ["#00c6c4", "Cyan"],
            "blue" : ["#0070d7", "Azul"],
            "gray" : ["#828282", "Gris"],
            "black" : ["#000000", "Negro"]
        };
        bbcodeToolbar.addColorSelect("Color", colors, true);
    </script>
<div id="linktool">
    <div id="linktool-scope">
        <label for="linktool-query-input">Crear link:</label>
        <input type="radio" name="scope" class="linktool-scope" value="1" checked="checked"/>Habbos
        <input type="radio" name="scope" class="linktool-scope" value="2"/>Salas
        <input type="radio" name="scope" class="linktool-scope" value="3"/>Grupos
    </div>
    <input id="linktool-query" type="text" name="query" value=""/>
    <a href="#" class="new-button" id="linktool-find"><b>Buscar</b><i></i></a>
    <div class="clear" style="height: 0;"><!-- --></div>
    <div id="linktool-results" style="display: none">
    </div>
    <script type="text/javascript">
        linkTool = new LinkTool(bbcodeToolbar.textarea);
    </script>
</div>
</div>

</form>

<p>
<a href="#" class="new-button" id="webstore-confirm-cancel"><b>Cancelar</b><i></i></a>
<a href="#" class="new-button" id="webstore-notes-continue"><b>Continuar</b><i></i></a>
</p>

<div class="clear"></div>