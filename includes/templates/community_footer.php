<?php
/*=========================================================+
|| # HabboCMS - Sistema de administración de contenido Habbo.
|+=========================================================+
|| # Copyright © 2010 Kolesias123. All rights reserved.
|| # http://www.infosmart.com.mx
|| # Partes Copyright © 2009 Yifan Lu. All rights reserved.
|| # http://www.yifanlu.com
|| # Base Copyright © 2007-2008 Meth0d. All rights reserved.
|| # http://www.meth0d.org
|+=========================================================+
|| # InfoSmart 2010. The power of Proyects.
|| # Este es un Software de código libre, libre edición.
|+=========================================================+
|| # Todas las imagenes, scripts y temas
|| # Copyright (C) 2010 Sulake Ltd. All rights reserved.
|+=========================================================*/

if (!defined("IN_HOLOCMS")) { header("Location:".PATH); exit; }
if($pageid == "credits"){ $n = "2"; }else{ $n = "3"; }

if($noads !== true){ ?>
<div id="column<?php echo $n; ?>" class="column">
				<div class="habblet-container ">
						<div class="ad-container">
<?php
$sql = mysql_query("SELECT * FROM cms_banners WHERE status = '1' ORDER BY id ASC");
while($row = mysql_fetch_assoc($sql)) { 
if($row['advanced'] == "1"){ echo $row['banner']."<br />"; } else { ?>
<a target="_blank" href="<?php echo $row['url']; ?>"><img src="<?php echo $row['banner']; ?>"></a><br />
<a target="_blank" href="<?php echo $row['url']; ?>"><?php echo FilterText($row['text']); ?></a><br />
<?php } } ?>

<div class="ad_skyscpr">
			
			
		</div>

						</div>
				</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
</div>
<?php } ?>
<!--[if lt IE 7]>
<script type="text/javascript">
Pngfix.doPngImageFix();
</script>
<![endif]-->
    </div>
<div id="footer">
	<p class="footer-links"><a href="<?php echo PATH; ?>/iot/go?lang=es&country=es" target="_new">Contáctanos</a> | <a href="<?php echo PATH; ?>/help/" target="_new">Afiliados</a> | <a href="<?php echo PATH; ?>/help" target="_new">FAQs</a> | <a href="http://sulake.com/" target="_new">Sulake</a> | <a href="<?php echo PATH; ?>/papers/termsAndConditions" target="_new">Términos y Condiciones</a> | <a href="<?php echo PATH; ?>/papers/privacy" target="_new">Política de Privacidad</a> | <a href="<?php echo PATH; ?>/help/" target="_new">La Manera Habbo  | <a href="<?php echo PATH; ?>/groups/ConsejosdeSeguridad">Seguridad</a></p>
	<p><span class="copylight">&copy; 2010 Sulake Corporation Oy. HABBO es una marca registrada de Sulake Corporation Oy en la Uni&oacute;n Europea, Estados Unidos, Jap&oacute;n, la Rep&uacute;blica Popular China y otras jurisdicciones. Todos los derechos reservados. </span></p>
</div></div>

</div>

<script type="text/javascript">
HabboView.run();
</script>

<?php echo getPub("pub_footer"); ?>
<?php echo $analytics; ?>

</body>
</html>