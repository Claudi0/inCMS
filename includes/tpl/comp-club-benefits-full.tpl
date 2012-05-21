

<link rel="stylesheet" href="http://www.pixeled.mx/web-gallery/static/styles/habboclub.css" type="text/css" />
<style>
#column1 {
    width: 770px !important;
}
</style>



<div id="column1" class="column">

				<div class="habblet-container ">		
						<div class="cbb clearfix hcred ">

                                                           <h2 class="title">Únete al <?php include ("nombre.php"); ?> Club 
							</h2>
						<script src="%www%/web-gallery/static/js/habboclub.js" type="text/javascript"></script>
<div id="hc-habblet box-content">
    <div id="hc-buy-container">
<div id="hc-buy-buttons" class="hc-buy-buttons">

<?php if(LOGGED_IN == TRUE){ ?>

<form class="subscribe-form" method="post">

   <div style="float: left; margin: 0px;">

    <div class="cbb habboclub-buyentry">
     <h2 class="title" style="background-color: #90a7b7;">
	  <?php if(!$users->hasHC(USER_ID) && !$users->hasVIP(USER_ID)){ ?>
       ¿HC o VIP?	 
	  <?php } else if($users->hasVIP(USER_ID)){ ?>
	  Club VIP
	  <?php } else { ?>
	   ¿Qué es el paso a VIP?
	  <?php } ?>
     </h2>
     <div style="padding: 10px 0px 0px 10px;">
       <p><?php if(!$users->hasHC(USER_ID) && !$users->hasVIP(USER_ID)){ ?>Suscripción no activada.<?php } else { ?>
	   <?php if($users->hasVIP(USER_ID)){ ?>VIP<?php } else { ?>HC<?php } ?> restante: <?php echo $users->GetClubDays(USER_ID); ?> días<?php } ?></p>
     </div>
     <div style="height: 113px; padding: 10px">
	 <?php if(!$users->hasHC(USER_ID) && !$users->hasVIP(USER_ID)){ ?>
       ¿HC o VIP? Ser HC te da más ropas, colores y regalos mensuales, por citar algunos beneficios. Pero ser VIP te da todo lo que puedes conseguir como HC, y mucho más 
	  <?php } else if($users->hasVIP(USER_ID)){ ?>
	  ¡Sé VIP y consigue mucho más!
	  <?php } else { ?>
	  Puedes comprar más días como HC o actualizar tu HC a VIP por los precios que se muestran. Perderás los días que te quedan como HC, pero ganarás días gratis como VIP a cambio.
	  <?php } ?>
     </div>

    </div> 
   </div> 
   
  <div style="float: left;">
     <?php if($users->hasVIP(USER_ID)){ ?>
	 <div class="cbb habboclub-buyentry">
     
      <h2 class="title" style="background-color: #9b9448;"> 
        <?php include ("nombre.php"); ?> Club
      </h2>   
            
    <div style="padding: 10px 0px 0px 10px;">
     <p>No podrás ser HC mientras continues siendo miembro del Club VIP.</p>
    </div> 
	<div style="height: 100px; padding: 10px"></div>
   </div> 
	<?php } else { ?>
     <div class="cbb habboclub-buyentry hcbasic">
     
      <h2 class="title" style="background-color: #9b9448;"> 
        <img style="float: left;" alt="hc" src="%www%/web-gallery/v2/images/habboclub_basic_small.png" />
        1 mes
      </h2>   
	 
	     <div style="height: 55px;">
     <img style="position: relative; left: 10px; top: 10px;" alt="credits" src="%www%/web-gallery/v2/images/newcredits/credit_in_white_bg.png" />   
     <span style="position: relative; left: -32px; top: -3px; font-size:1.5em; font-weight:bold; color: #000000;" class="habboclub-offerprice">15</span>           
     <a class="new-button oversize" id="subscribe1" href="#" onclick='habboclub.buttonClick(1, "Confirmar suscripción"); return false;'><b>Comprar</b><i></i></a>

     <div style="width: 10px;"></div>

    </div> 
   </div> 
  
        
     <div class="cbb habboclub-buyentry hcbasic">
     
      <h2 class="title" style="background-color: #9b9448;"> 
        <img style="float: left;" alt="hc" src="%www%/web-gallery/v2/images/habboclub_basic_small.png" />
        3 meses
      </h2>   
	  
	     <div style="height: 55px;">
     <img style="position: relative; left: 10px; top: 10px;" alt="credits" src="%www%/web-gallery/v2/images/newcredits/credit_in_white_bg.png" />   
     <span style="position: relative; left: -32px; top: -3px; font-size:1.5em; font-weight:bold; color: #000000;" class="habboclub-offerprice">45</span>           
     <a class="new-button oversize" id="subscribe2" href="#" onclick='habboclub.buttonClick(2, "Confirmar suscripción"); return false;'><b>Comprar</b><i></i></a>

     <div style="width: 10px;"></div>

    </div> 
   </div> 
   <?php } ?>
  
  </div>   
  
   
  <div style="float: left;"> 
		<?php if(!$users->hasVIP(USER_ID) && $users->hasHC(USER_ID)){ ?>
	 <div class="cbb habboclub-buyentry hcvip">
     
      <h2 class="title" style="background-color: #969696;">      
        <img style="float: left;" alt="vip" src="%www%/web-gallery/v2/images/habboclub_vip_small.png" />
        Convertir HC en VIP
      </h2>
            
    <div style="padding: 10px;">

     <img style="float: left;" alt="credits" src="%www%/web-gallery/v2/images/newcredits/credit_in_white_bg.png" />   
     <span style="position: relative; left: -32px; top: 9px; font-size:1.5em; font-weight:bold; color: #000000;" class="habboclub-offerprice">10</span>       
     <a class="new-button oversize" id="subscribe3" href="#" onclick='habboclub.buttonClick(5, "Confirmar suscripción"); return false;'><b>Comprar</b><i></i></a>

    </div> 
   </div>
	<?php } else { ?>
     <div class="cbb habboclub-buyentry hcvip">
     
      <h2 class="title" style="background-color: #969696;">      
        <img style="float: left;" alt="vip" src="%www%/web-gallery/v2/images/habboclub_vip_small.png" />
        1 mes
      </h2>
            
    <div style="height: 55px;">
     <img style="position: relative; left: 10px; top: 10px;" alt="credits" src="%www%/web-gallery/v2/images/newcredits/credit_in_white_bg.png" />   
     <span style="position: relative; left: -32px; top: -3px; font-size:1.5em; font-weight:bold; color: #000000;" class="habboclub-offerprice">25</span>           
     <a class="new-button oversize" id="subscribe3" href="#" onclick='habboclub.buttonClick(3, "Confirmar suscripción"); return false;'><b>Comprar</b><i></i></a>

     <div style="width: 10px;"></div>

    </div> 
   </div> 
  
       
     <div class="cbb habboclub-buyentry hcvip">
     
      <h2 class="title" style="background-color: #969696;">      
        <img style="float: left;" alt="vip" src="%www%/web-gallery/v2/images/habboclub_vip_small.png" />
        3 meses 
      </h2>
            
    <div style="height: 55px;">
     <img style="position: relative; left: 10px; top: 10px;" alt="credits" src="%www%/web-gallery/v2/images/newcredits/credit_in_white_bg.png" />   
     <span style="position: relative; left: -32px; top: -3px; font-size:1.5em; font-weight:bold; color: #000000;" class="habboclub-offerprice">60</span>           
     <a class="new-button oversize" id="subscribe4" href="#" onclick='habboclub.buttonClick(4, "Confirmar suscripción"); return false;'><b>Comprar</b><i></i></a>

     <div style="width: 10px;"></div>

    </div> 
   </div> 
  <?php } ?>
  </div> 
  
</form>
<?php } else { ?>
<div id="hc-habblet" class="box-content">
Regístrate para poder ver tu situación en el %shortname% Club 
</div>
<?php } ?>
</div>    </div>
</div>

	
						
					</div>
				</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 

			     		
				<div class="habblet-container ">		
						<div class="cbb clearfix hcred ">

	
							<h2 class="title">Compara Los Beneficios 
							</h2>
						<div id="habboclub-info" class="box-content" style="position: relative; top: 3px; left: -11px">
 <table cellspacing=0 cellpadding=0>
  <tr>
   <td valign=top>
  <div class="cbb hcnone habboclub-infoentry" style="height: 214px;">
   <h2 class="title" style="height: 53px; background-color: #90a7b7;">
    <span style="position: relative; top: 18px; font-weight: bold">CUALQUIERA Y GRATIS</span>

   </h2> 
   <div style="height: 3px"></div>
   <div class="rounded" style="background-color: #ffffff;">
    Look Básico 
   </div>
   <img style="float: left; padding: 10px;" alt="xx" src="%www%/web-gallery/v2/images/newhc/clothes_b.png" />
  </div> 
  
  <div class="cbb hcnone habboclub-infoentry" style="height: 83px;">
   <div class="rounded" style="background-color: #ffffff;">
    Colores básicos 
   </div>

   <img style="float: left; padding: 10px;" alt="xx" src="%www%/web-gallery/v2/images/newhc/colors_b.png" />
  </div> 
  
  <div class="cbb hcnone habboclub-infoentry" style="height: 101px;">
   <div class="rounded" style="background-color: #ffffff;">
    Ropa y pelo de 2 colores que puedes mezclar 
   </div>
   <img style="float: left; padding: 10px;" alt="xx" src="%www%/web-gallery/v2/images/newhc/multicolor_b.png" />
  </div> 
  
  <div class="cbb hcnone habboclub-infoentry" style="height: 185px;">   
  </div> 
  
  <div class="cbb hcnone habboclub-infoentry">

   <div class="rounded" style="background-color: #ffffff;">
    Lista de Amigos con capacidad para 200 
   </div>
   <img style="float: left; padding: 10px;" alt="xx" src="%www%/web-gallery/v2/images/newhc/friends_b.png" />
  </div>
  
  <div class="cbb hcnone habboclub-infoentry" style="height: 136px;">   
  </div>  
  
  <div class="cbb hcnone habboclub-infoentry" style="height: 75px;">   
   <div class="rounded" style="background-color: #ffffff;">
    12 diseños de Salas 
   </div>

  </div> 
  
  <div class="cbb hcnone habboclub-infoentry" style="height: 65px;">   
  </div>  
  
  <div class="cbb hcnone habboclub-infoentry" >   
   <div class="rounded" style="background-color: #ffffff;">
    1 baile
   </div>
  </div>  
  
  <div class="cbb hcnone habboclub-infoentry" >   
   <div class="rounded" style="background-color: #ffffff;">
    Ofertas en el Mercadillo 
   </div>
   <img style="float: left; padding: 10px;" alt="xx" src="%www%/web-gallery/v2/images/newhc/coin_offers.png" />

   <div style="position: relative; top: 13px; left: -2px">
    = 5 ofertas x 1 Crédito 
   </div>
  </div>  
  
  </td><td valign=top>
  
  <div class="cbb hcbasic habboclub-infoentry">
   <h2 class="title" style="height: 53px; background-color: #9b9448;">
    <img style="position: relative; top: 5px" alt="xx" src="%www%/web-gallery/v2/images/habboclub_basic_big.png" />
   </h2> 
   <div style="height: 3px"></div>

   <div class="rounded" style="background-color: #ffffff;">
    Looks HC 
   </div>
   <img style="float: left; padding: 10px;" alt="xx" src="%www%/web-gallery/v2/images/newhc/clothes_hc.png" />
  </div> 
  
  <div class="cbb hcbasic habboclub-infoentry" style="height: 83px;">
   <div class="rounded" style="background-color: #ffffff;">
    Colores HC 
   </div>
   <img style="float: left; padding: 10px;" alt="xx" src="%www%/web-gallery/v2/images/newhc/colors_hc.png" />

  </div> 
  
  <div class="cbb hcbasic habboclub-infoentry">
   <div class="rounded" style="background-color: #ffffff;">
    Ropa y pelo de 2 colores que puedes mezclar 
   </div>
   <img style="float: left; padding: 10px;" alt="xx" src="%www%/web-gallery/v2/images/newhc/multicolor_hc.png" />
  </div> 
  
  <div class="cbb hcbasic habboclub-infoentry">
   <div class="rounded" style="background-color: #ffffff;">
    Armario para guardar 5 conjuntos 
   </div>

  </div> 
  
  <div class="cbb hcbasic habboclub-infoentry" style="height: 135px;">
   <div class="rounded" style="background-color: #ffffff;">
	1 Furni HC de regalo al mes, exclusivo HC 
   </div>
   <img style="float: left; padding: 10px;" alt="xx" src="%www%/web-gallery/v2/images/newhc/furni_hc.png" />
  </div> 
  
  <div class="cbb hcbasic habboclub-infoentry">
   <div class="rounded" style="background-color: #ffffff;">
     Lista de Amigos con capacidad para 600 
   </div>

   <img style="float: left; padding: 10px;" alt="xx" src="%www%/web-gallery/v2/images/newhc/friends_hc.png" />
  </div> 
  
  <div class="cbb hcbasic habboclub-infoentry">
   <div class="rounded" style="background-color: #ffffff;">
    Placa HC
   </div>
   <img style="float: left; padding: 10px;" alt="xx" src="%www%/web-gallery/v2/images/newhc/badge_hc.png" />
  </div> 
  
  <div class="cbb hcbasic habboclub-infoentry" >
   <div class="rounded" style="background-color: #ffffff;">

    Prioridad para entrar en Salas 
   </div>
  </div> 
  
  <div class="cbb hcbasic habboclub-infoentry" style="height: 75px;">   
   <div class="rounded" style="background-color: #ffffff;">
    + 8 diseños HC 
   </div>
   <div style="padding: 10px">Salas con escaleras</div>
  </div>  
  
  <div class="cbb hcbasic habboclub-infoentry">   
   <div class="rounded" style="background-color: #ffffff;">

    Comandos 
   </div>
   <div style="padding: 5px;">
    <b>:furni</b> - muestra Furni<br/>
    <b>:chooser</b> - muestra los usuarios 
   </div>
  </div> 
  
  <div class="cbb hcbasic habboclub-infoentry" >   
   <div class="rounded" style="background-color: #ffffff;">

    4 Bailes HC 
   </div>
  </div>   
  
  <div class="cbb hcbasic habboclub-infoentry" >   
   <div class="rounded" style="background-color: #ffffff;">
    Ofertas en el Mercadillo 
   </div>
   <img style="float: left; padding: 10px;" alt="xx" src="%www%/web-gallery/v2/images/newhc/coin_offers.png" />
   <div style="position: relative; top: 13px; left: -2px">
    = 5 ofertas gratis 
   </div>

  </div>   
  
  </td><td valign=top>
 
  <div class="cbb hcvip habboclub-infoentry">
   <h2 class="title" style="height: 53px; background-color: #969696;">
    <img style="position: relative; top: 5px" alt="xx" src="%www%/web-gallery/v2/images/habboclub_vip_big.png" />
   </h2> 
   <div style="height: 3px"></div>
   <div class="rounded" style="background-color: #ffffff;">
    Looks HC + VIP 
   </div>

   <img style="float: left; padding: 10px;" alt="xx" src="%www%/web-gallery/v2/images/newhc/clothes_vip.png" />
  </div> 
  
  <div class="cbb hcvip habboclub-infoentry">
   <div class="rounded" style="background-color: #ffffff;">
    Colores HC + VIP
   </div>
   <img style="float: left; padding: 10px;" alt="xx" src="%www%/web-gallery/v2/images/newhc/colors_vip.png" />
  </div> 
  
  <div class="cbb hcvip habboclub-infoentry" style="height: 101px;">
   <div class="rounded" style="background-color: #ffffff;">

   Ropa y pelo de 2 colores que puedes mezclar 
   </div>
   <img style="float: left; padding: 10px;" alt="xx" src="%www%/web-gallery/v2/images/newhc/multicolor.png" />
  </div> 
  
  <div class="cbb hcvip habboclub-infoentry" >
   <div class="rounded" style="background-color: #ffffff;">
    Armario para guardar 10 conjuntos
   </div>
  </div> 
  
  <div class="cbb hcvip habboclub-infoentry">
   <div class="rounded" style="background-color: #ffffff;">

     2 Furni VIP de regalo al mes, uno exclusivo HC + otro de la edición VIP 
   </div>
   <img style="float: left; padding: 10px;" alt="xx" src="%www%/web-gallery/v2/images/newhc/furni_vip.png" />
  </div> 
  
   <div class="cbb hcvip habboclub-infoentry">
   <div class="rounded" style="background-color: #ffffff;">
    Lista de Amigos con capacidad para 900
   </div>
   <img style="float: left; padding: 10px;" alt="xx" src="%www%/web-gallery/v2/images/newhc/friends_vip.png" />
  </div> 
  
  <div class="cbb hcvip habboclub-infoentry">

   <div class="rounded" style="background-color: #ffffff;">
    Placas HC + VIP
   </div>
   <img style="float: left; padding: 10px;" alt="xx" src="%www%/web-gallery/v2/images/newhc/badge_vip.png" />
  </div>
  
  <div class="cbb hcvip habboclub-infoentry" >
   <div class="rounded" style="background-color: #ffffff;">
    Prioridad para entrar en Salas 
   </div>
  </div> 
  
  <div class="cbb hcvip habboclub-infoentry">   
   <div class="rounded" style="background-color: #ffffff;">

    + 8 diseños HC + 6 diseños VIP 
   </div>
   <div style="padding: 10px">
     Salas con escaleras<br/>
     Salas sin paredes 
   </div>
  </div>   
  
  <div class="cbb hcvip habboclub-infoentry">   
   <div class="rounded" style="background-color: #ffffff;">
    Comandos
   </div>

   <div style="padding: 5px;">
    <b>:furni</b> - muestra Furni<br/>
    <b>:chooser</b> - muestra los usuarios 
   </div>
  </div>   
  
  <div class="cbb hcvip habboclub-infoentry" >   
   <div class="rounded" style="background-color: #ffffff;">
   4 Bailes HC
   </div>

  </div>  
  
  <div class="cbb hcvip habboclub-infoentry" >   
   <div class="rounded" style="background-color: #ffffff;">
    Ofertas en el Mercadillo 
   </div>
   <img style="float: left; padding: 10px;" alt="xx" src="%www%/web-gallery/v2/images/newhc/coin_offers.png" />
   <div style="position: relative; top: 13px; left: -2px">
    = 10 ofertas gratis 
   </div>
  </div>  
  
   </td> 
  </tr>

 </table>
</div>
	
						
					</div>
				</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
</div>
