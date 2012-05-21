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

<div id="forced-email-login-container" class="clearfix">
      <div id="forced-email-login-title" class="bottom-border">Security Notice</div>
      <ul id="forced-email-login-content" class="clearfix">
        <li><div class="force-email-notice"></div>
          <span>We have improved our security measures, the hotel is now safer than ever. Please use your <b>email address</b> to log in.</span>
        </li>

        <li><div class="force-email-notice-1"></div>
          <span>Keep your account safe and secure.</span>
        </li>
        <li class="center bottom-border">
            <input class="email-address" value="xd-draker@hotmail.es" autocomplete="off" type="text">
        </li>
        <li class="bottom-border"><div class="force-email-notice-2"></div>
          <span>Please use the Habbo password associated with your email address to log in.</span>
        </li>

      </ul>
      <a href="#" id="force-email-ok-button" class="new-button"><b>Okay</b><i></i></a>
    </div>

