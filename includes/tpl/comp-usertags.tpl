<div class="habblet-container ">		
						<div class="cbb clearfix green "> 
<div class="box-tabs-container clearfix"> 
    <h2>YoSoys</h2> 
    <ul class="box-tabs"> 
        <li id="tab-1-6-1"><a href="#">
Top YoSoys</a><span class="tab-spacer"></span></li> 
        <li id="tab-1-6-2" class="selected"><a href="#">Mis YoSoys</a><span class="tab-spacer"></span></li> 
    </ul> 
</div> 
    <div id="tab-1-6-1-content"  style="display: none"> 
    		<div class="progressbar"><img src="%www%/web-gallery/images/progress_bubbles.gif" alt="" width="29" height="6" /></div> 
    		<a href="/habblet/proxy?hid=h22" class="tab-ajax"></a> 
    </div> 
    <div id="tab-1-6-2-content" > 
    
	<?php
	
	$tags = uberUsers::GetUserTags(USER_ID);
	$tagCount = count($tags);
	
	if ($tagCount == 0)
	{
		echo '<div id="my-tag-info" class="habblet-content-info">No tienes YoSoys. Responde debajo la pregunta o simplemente agregua una etiqueta a tu eleccion.</div>';
	}
	else if ($tagCount < 20)
	{
		echo '<div id="my-tag-info" class="habblet-content-info">Límite de YoSoys alcanzado. Es necesario quitar un YoSoy antes de añadir otro.</div>';
	}
		 
	?>

	
<div class="box-content"> 
<?php

include "comp-taglist.tpl";

?>
</div> 
 
</div> 
</div> 

<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>