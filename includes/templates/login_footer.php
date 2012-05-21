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

?>
<!--[if lt IE 7]>
<script type="text/javascript">
Pngfix.doPngImageFix();
</script>
<![endif]-->
<div id="footer">
	<p align="center"><a href="mailto:papasote-@hotmail.com" target="_new">Contactanos</a> | <a href="<?php echo PATH; ?>/help">FAQs</a> |<span class="footer-links"><a href="<?php echo PATH; ?>/papers/termsAndConditions" target="_new">Terminos de servicio</a> | <a href="<?php echo PATH; ?>/papers/privacy" target="_new">Politica y privacidad</a>| <a href="http://mundomax.us" target="_new">MundoMAx</a></span></p>
	<p align="center"><strong>Copyright © 2010 - 2011 EgoCMS v2 por Juan Carlos y Jorge40813.</strong></p>
	<p class="footer-links">&nbsp;</p>
</div>
    </div>
</div>

<script type="text/javascript">
HabboView.run();
</script>

<?php echo $analytics; ?>

</body>
</html>