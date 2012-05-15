<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
require_once('../includes/mysql.php');
//CMS Settings
mysql_query("DROP TABLE cms_news");
mysql_query("CREATE TABLE IF NOT EXISTS `cms_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `shortstory` text COLLATE latin1_general_ci,
  `longstory` text COLLATE latin1_general_ci,
  `published` int(10) NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE latin1_general_ci DEFAULT '/includes/newsimage/topstory_beta_bouw.png',
  `campaign` text COLLATE latin1_general_ci,
  `campaign_image` text COLLATE latin1_general_ci,
  `author` int(6) NOT NULL DEFAULT '1',
  `super_fader_image` varchar(225) CHARACTER SET latin1 NOT NULL DEFAULT '/includes/newsimage/topstory_beta_bouw.png',
  `super_fader` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=49 ;"); 
mysql_query("INSERT INTO `cms_news` (`id`, `title`, `shortstory`, `longstory`, `published`, `image`, `campaign`, `campaign_image`, `author`, `super_fader_image`, `super_fader`) VALUES
(48, 'New CMS Installed', '     <p>News Destine</p>', 'New CMS', 1332506558, '/includes/newsimage/topstory_beta_bouw.png', 1, '/web-gallery/Noticias/campaign/hotcampaign_thumb_nwslter.gif', 306, '/web-gallery/Noticias/news/v2/topstory_beta_bouw.png', 1),
(42, 'Crie uma Noticia!', 'Crie uma Noticia Pelo Painel', '', 1332401469, '', 0, '/Public/Images/campaign/promocao_banco.png', 306, '/includes/newsimage/topstory_beta_bouw.png', 1);");
mysql_query("CREATE TABLE IF NOT EXISTS `ranks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `badgeid` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;");
mysql_query("INSERT INTO `ranks` (`id`, `name`, `badgeid`) VALUES
(1, 'User', ''),
(2, 'VIP', 'VIP'),
(3, 'Habbo-X', 'LLL'),
(4, 'Silver', 'XXX'),
(5, 'Stager', 'MOD'),
(6, 'Moderator', 'ADM'),
(7, 'Administrator', 'ADM'),
(8, 'Owner', 'ADM');");



?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr" >
	<head>
		  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="description" content="" />
  <meta name="generator" content="Joomla! 1.5 - Open Source Content Management" />
  <title>inCMS</title>
  <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />


		<link href="template/css/template.css" rel="stylesheet" type="text/css" />
		
		<script type="text/javascript" src="../media/system/js/mootools.js"></script>
		<script type="text/javascript" src="includes/js/installation.js"></script>
		<script type="text/javascript" src="template/js/validation.js"></script>

		<script type="text/javascript">
			Window.onDomReady(function(){ new Accordion($$('h3.moofx-toggler'), $$('div.moofx-slider'), {onActive: function(toggler, i) { toggler.addClass('moofx-toggler-down'); },onBackground: function(toggler, i) { toggler.removeClass('moofx-toggler-down'); },duration: 300,opacity: false, alwaysHide:true, show: 1}); });
  		</script>
	</head>
	<body>
		<div id="header1">
			<div id="header2">
				<div id="header3">
					<div id="version">1.1.2</div>
					<span>Installation</span>
				</div>
			</div>
		</div>
		<div id="content-box">
			<div id="content-pad">
				

	<div id="stepbar">
		<div class="t">
		<div class="t">
			<div class="t"></div>
		</div>
	</div>
	<div class="m">
			<h1>Steps</h1>
			<div class="step-off">
				1 : Welcome
			</div>
			<div class="step-off">
				2 : MySQL Connection
			</div>
            <div class="step-on">
				4 : Finish
			</div>
		<div class="box"></div>
  	</div>
	<div class="b">
		<div class="b">
			<div class="b"></div>
		</div>
	</div>
  </div>



	<div id="warning">
		<noscript>
			<div id="javascript-warning">
				Você Precisa de JavaScript Para Continuar
			</div>
		</noscript>
	</div>




<script language="JavaScript" type="text/javascript">
	function validateForm( frm, task ) {
		submitForm( frm, task );
	}
</script>


<div id="right">
	<div id="rightpad">
		<div id="step">
			<div class="t">
				<div class="t">
					<div class="t"></div>
				</div>
			</div>
			<div class="m">

				<div class="far-right">
					
							
						
				</div>
				<span class="step">Finish</span>

			</div>
			<div class="b">
				<div class="b">
					<div class="b"></div>
				</div>
			</div>
		</div>

		<div id="installer">
			<div class="t">
				<div class="t">
					<div class="t"></div>
				</div>
			</div>
			<div class="m">

				<h2>Message of Congratulations.</h2>
				<div class="install-text">
					Read This
				</div>
				<div class="install-body">
    			<div class="t">
            <div class="t">
              <div class="t"></div>
            </div>
          </div>
          <div class="m">
		<fieldset>
Hello You Gotta Install inCMS With Many Successes. You PLEASE Pesso to that.
Porfavor Delete Folder <b>INSTALL</b> From Your HTDOCS/WWW. ;]

		</fieldset>
		
					</div>
          <div class="b">
            <div class="b">
              <div class="b"></div>
            </div>
          </div>
					<div class="clr"></div>
				</div>
				<div class="clr"></div>
			</div>
      <div class="b">
        <div class="b">
          <div class="b"></div>
        </div>
      </div>
		</div>
	</div>
</div>


<div class="clr"></div>

<input type="hidden" name="task" value="" />
</form>


			</div>
		</div>
		<div id="footer1">
			<div id="footer2">
				<div id="footer3"></div>
			</div>
		</div>
		<div id="copyright"><a href="http://www.joomla.org/" target="_blank">inCMS</a>
			Based on SpheraCMS.		</div>
	</body>
</html>
