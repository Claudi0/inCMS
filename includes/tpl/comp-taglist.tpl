	<div class="habblet" id="my-tags-list"> 
	
	<?php
	
	$tags = uberUsers::GetUserTags(USER_ID);
	$tagCount = count($tags);	
	
	if ($tagCount > 0)
	{
		echo '<ul class="tag-list make-clickable">' . LB;
		
		foreach ($tags as $id => $tag)
		{
			echo '                    <li><a href="%www%/tag/' . $tag . '" class="tag" style="font-size:10px">' . $tag . '</a> 
                        <div class="tag-id" style="display:none">' . $id . '</div><a class="tag-remove-link"
                        title="Quitar YoSoy"
                        href="#"></a></li>' . LB;
		}
		
		echo '</ul>' . LB;
	}
	
	if ($tagCount >= 20)
	{
		echo '<div class="add-tag-form">Límite de YoSoys alcanzado. Es necesario quitarun YoSoy antes de añadir otro.</div>';
	}
	else
	{
		echo '<form method="post" action="/myhabbo/tag/add" onsubmit="TagHelper.addFormTagToMe();return false;" > 
    <div class="add-tag-form clearfix"> 
		<a  class="new-button" href="#" id="add-tag-button" onclick="TagHelper.addFormTagToMe();return false;"><b>A&ntilde;adir YoSoy</b><i></i></a> 
        <input type="text" id="add-tag-input" maxlength="20" style="float: right"/> 
        <em class="tag-question">';
		
		$possibleQuestions = Array();
		$possibleQuestions[] = "Cual es tu comida favorita?";
		$possibleQuestions[] = "Cual es tu actor favorito";
		$possibleQuestions[] = "Qu&eacute; tipo de m&uacute;sica te gusta?";
		$possibleQuestions[] = "Cu&aacute; es tu actor favorito?";
			$possibleQuestions[] = "Cu&aacute; es tu color favorito?";
		$possibleQuestions[] = "Cu&aacute; es tu grupo favorito?";
			$possibleQuestions[] = "Cu&aacute; es tu canal de tv favorito?";


	$possibleQuestions[] = "¿Quien es tu actor favorito?";
	$possibleQuestions[] = "¿Prefieres deporte o siesta?";
	$possibleQuestions[] = "¿Tienes un sobrenombre?";
	$possibleQuestions[] = "¿Cual es tu canción favorita?";
	$possibleQuestions[] = "¿Cuál es tu época del año favorita?";
	$possibleQuestions[] = "¿Cual es tu banda favorita?";
	$possibleQuestions[] = "¿No puedes vivir sin qué programa de televisión? ";
	$possibleQuestions[] = "¿Qué instrumento te gustaría tocar?";
	$possibleQuestions[] = "Elige: ¿Pizza? ¿Hamburguesa? ¿Hot-Dog?";
	$possibleQuestions[] = "El Deporte que más te gusta";
	$possibleQuestions[] = "Para salir de fiesta vistes con...";
	$possibleQuestions[] = "¿Cual es tu pelicula favorita?";
	$possibleQuestions[] = "Perros, Gatos o algo más exotico.";
	$possibleQuestions[] = "¿Rojo? ¿Azul? ¿Rosa? u otro color.";
	$possibleQuestions[] = "Elige: ¿MCR? ¿Panda? ¿Jonas Brothers?";
    $possibleQuestions[] = "Elige: ¿Rock? ¿Pop? ¿Rap?";
    $possibleQuestions[] = "Que palabra te define";
    $possibleQuestions[] = "¿Cual es tu Staff favorito?";
    $possibleQuestions[] = "Elige: ¿Meth0d? ¿Kolesias123? ¿Yifan_lu?";
    $possibleQuestions[] = "¿Postre o Jamon?";
    $possibleQuestions[] = "¿Que otro idioma hablas?";
    $possibleQuestions[] = "Lo mejor del mundo es...";
	$possibleQuestions[] = "¿Que furni te gusta más?";
	$possibleQuestions[] = "Elige: ¿Laptop? ¿Escritorio?";
	$possibleQuestions[] = "Elige: ¿KekoMundo? ¿MixForo? u otra comunidad";
	$possibleQuestions[] = "Elige: ¿Selena Gomez? ¿Miranda? u otra actriz";
	$possibleQuestions[] = "México, Venezuela, España o algo más exotico.";
	$possibleQuestions[] = "¿Qué profesión tienes?";
	$possibleQuestions[] = "Elige: ¿Fiestas? ¿Programación? ¿Script?";
	$possibleQuestions[] = "Elige: ¿Kolesias123? ¿Inmortal? o alguíen más";
			
		
		echo $possibleQuestions[rand(0, count($possibleQuestions) - 1)];
		

		echo '</em> 
    </div> 
    <div style="clear: both"></div> 
    </form>';
	}
	
	?>

</div> </div>
 
<script type="text/javascript"> 
<?php if (!isset($habbletmode)){ echo 'document.observe("dom:loaded", function() {'; } ?>
    TagHelper.setTexts({
        tagLimitText: "Límite de YoSoys alcanzado. Es necesario quitar un YoSoy antes de añadir otro.",
        invalidTagText: "YoSoy invalido.",
        buttonText: "OK"
    });
	
<?php

if (isset($habbletmode))
{
	echo 'TagHelper.bindEventsToTagLists();';
}
else
{
    echo "TagHelper.init('" . USER_ID . "');";
	echo "});";
}

?>
</script> 