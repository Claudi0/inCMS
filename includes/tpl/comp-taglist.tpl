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
		echo '<div class="add-tag-form">L�mite de YoSoys alcanzado. Es necesario quitarun YoSoy antes de a�adir otro.</div>';
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


	$possibleQuestions[] = "�Quien es tu actor favorito?";
	$possibleQuestions[] = "�Prefieres deporte o siesta?";
	$possibleQuestions[] = "�Tienes un sobrenombre?";
	$possibleQuestions[] = "�Cual es tu canci�n favorita?";
	$possibleQuestions[] = "�Cu�l es tu �poca del a�o favorita?";
	$possibleQuestions[] = "�Cual es tu banda favorita?";
	$possibleQuestions[] = "�No puedes vivir sin qu� programa de televisi�n? ";
	$possibleQuestions[] = "�Qu� instrumento te gustar�a tocar?";
	$possibleQuestions[] = "Elige: �Pizza? �Hamburguesa? �Hot-Dog?";
	$possibleQuestions[] = "El Deporte que m�s te gusta";
	$possibleQuestions[] = "Para salir de fiesta vistes con...";
	$possibleQuestions[] = "�Cual es tu pelicula favorita?";
	$possibleQuestions[] = "Perros, Gatos o algo m�s exotico.";
	$possibleQuestions[] = "�Rojo? �Azul? �Rosa? u otro color.";
	$possibleQuestions[] = "Elige: �MCR? �Panda? �Jonas Brothers?";
    $possibleQuestions[] = "Elige: �Rock? �Pop? �Rap?";
    $possibleQuestions[] = "Que palabra te define";
    $possibleQuestions[] = "�Cual es tu Staff favorito?";
    $possibleQuestions[] = "Elige: �Meth0d? �Kolesias123? �Yifan_lu?";
    $possibleQuestions[] = "�Postre o Jamon?";
    $possibleQuestions[] = "�Que otro idioma hablas?";
    $possibleQuestions[] = "Lo mejor del mundo es...";
	$possibleQuestions[] = "�Que furni te gusta m�s?";
	$possibleQuestions[] = "Elige: �Laptop? �Escritorio?";
	$possibleQuestions[] = "Elige: �KekoMundo? �MixForo? u otra comunidad";
	$possibleQuestions[] = "Elige: �Selena Gomez? �Miranda? u otra actriz";
	$possibleQuestions[] = "M�xico, Venezuela, Espa�a o algo m�s exotico.";
	$possibleQuestions[] = "�Qu� profesi�n tienes?";
	$possibleQuestions[] = "Elige: �Fiestas? �Programaci�n? �Script?";
	$possibleQuestions[] = "Elige: �Kolesias123? �Inmortal? o algu�en m�s";
			
		
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
        tagLimitText: "L�mite de YoSoys alcanzado. Es necesario quitar un YoSoy antes de a�adir otro.",
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