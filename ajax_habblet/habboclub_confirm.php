<?php

if(isset($_POST['optionNumber'])){


$plantogive = $_POST['optionNumber'];



if($plantogive == "1"){
$price = "15";
$dias = "31";
$image = "/web-gallery/v2/images/habboclub_basic_small.png";
$text = "Habbo Club";
$money = "Cr&#233;ditos";

	
}elseif($plantogive == "2"){
$price = "45";
$dias = "93";
$image = "/web-gallery/v2/images/habboclub_basic_small.png";
$text = "Habbo Club";
$money = "Cr&#233;ditos";
}elseif($plantogive == "3"){
$price = "30";
$dias = "31";
$image = "/web-gallery/v2/images/habboclub_vip_small.png";
$text = "VIP";
$money = "Créditos";
}elseif($plantogive == "4"){
$price = "50";
$dias = "93";
$image = "/web-gallery/v2/images/habboclub_vip_small.png";
$text = "VIP";
$money = "Créditos";

	
}else{echo 'Error procesando tu solicitud.';};






if(isset($price)){

echo '<div id="hc_confirm_box">

  <img style="padding: 10px; float: left;" src="'.$image.'" alt="basic" align="left" style="margin:10px;" /> 
<div style="width: 300px; margin-left: 10px; float: left;">
 <p>Est&#225;s a punto de conseguir tu '.$text.'!</p>
 <p>Precio: <b>'.$price.' '.$money.'</b></p>
  <p>Est&#225;s comprando: <b>'.$dias.' d&#237;as como '.$text.'</b></p>
</div>
<p>
<a href="#" class="new-button" onclick="habboclub.closeSubscriptionWindow(); return false;">
<b>Cancelar</b><i></i></a>
<a href="#" ondblclick="habboclub.showSubscriptionResultWindow('.$plantogive.',\'HABBO CLUB\'); return false;" onclick="habboclub.showSubscriptionResultWindow('.$plantogive.',\'HABBO CLUB\'); return false;" class="new-button">
<b>Subscribir</b><i></i></a>
</p>

</div>

<div class="clear"></div>';

}else{echo 'Error procesando tu solicitud.';};



}else{echo 'Error procesando tu solicitud.';};

?>