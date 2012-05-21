<?php
/*=======================================================================
| EGOCMS - Avanzado Sitio Web y Sistema de Gestión de Contenidos.
| #######################################################################
| Copyright (c) 2010, Roy 'Meth0d' 'Jorge4813'
| http://www.habbex.org
| #######################################################################
| Este programa se distribuye con la esperanza de que sea útil,
| pero SIN NINGUNA GARANTÍA, incluso sin la garantía implícita de
| COMERCIALIZACIÓN o IDONEIDAD PARA UN PROPÓSITO PARTICULAR. Consulte la
| Licencia Pública General GNU para más detalles.
\======================================================================*/

define('TAB_ID', 12);
define('PAGE_ID', 20);

require_once "global.php";

if (!LOGGED_IN)
{
	header("Location: " . WWW . "/");
	exit;
}
else if ($users->GetUserVar(USER_ID, 'newbie_status') == "0")
{
	header("Location: " . WWW . "/register/welcome");
	exit;
}

// Initialize template system
$tpl->Init();

// Initial variables
$tpl->SetParam('page_title', 'Grupo: Grupos');

// Generate page header
$tpl->AddGeneric('head-init');
$tpl->AddIncludeSet('generic');
$tpl->AddIncludeFile(new IncludeFile('text/css', 'http://www.pixeled.mx//web-gallery/v2/styles/group.css', 'stylesheet'));
$tpl->AddIncludeFile(new IncludeFile('text/javascript', 'http://www.pixeled.mx//web-gallery/static/js/homeauth.js'));
$tpl->AddIncludeFile(new IncludeFile('text/css', 'http://www.pixeled.mx//web-gallery/v2/styles/lightwindow.css', 'stylesheet'));
$tpl->AddIncludeFile(new IncludeFile('text/javascript', 'http://www.pixeled.mx//web-gallery/static/js/homeview.js'));
$tpl->WriteIncludeFiles();
$tpl->AddGeneric('head-overrides-generic');
$tpl->AddGeneric('head-bottom');

// Generate generic top/navigation/login box
$tpl->AddGeneric('generic-top');

// Column 1
$tpl->Write('<div id="column1" class="column">');

// Me/infofeed widget
$tpl->AddGeneric('comp-wired');


// Output the page
$tpl->Output();

?>
