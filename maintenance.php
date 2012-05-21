<?php
$page['id']="0";
$page['sub_id']="0";
$page['name']="maintenance";
$page['redirect']="0";
require_once($_SERVER["DOCUMENT_ROOT"]."/includes/core.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" xml:lang="es" xmlns="http://www.w3.org/1999/xhtml"><head>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<title><?php echo get_title(); ?></title>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
	<script src="http://error.habbo.com/es/js/jquery.tweet.js" type="text/javascript"></script>
	
	<link type="text/css" rel="stylesheet" href="http://error.habbo.com/es/style/maintenance.css">
	
</head>
<body>

<div id="container">
	<div id="content">
		<div class="clearfix" id="header">
			<h1><span></span></h1>
		</div>
		<div id="process-content">

<div class="fireman">

<h1>Stopping for maintenance!</h1>

<p>
Sorry, but you can not access <?php echo get_settings("hotel_name"); ?> for the moment.<br><br>
Back soon.
</p><p>

</p></div>

<div class="tweet-container">

<h2>What is happening?</h2>

<div class="tweet"></div>
<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 30000,
  width: 310,
  height: 300,
  theme: {
    shell: {
      background: '#4a4d4f',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#4a4d4f',
      links: '#fc6304'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    behavior: 'all'
  }
}).render().setUser('Habbo').start();
</script>
</div>

<div id="footer">
<?php get_footer(); ?>
</div>

		</div>
	</div>
</div>

<script type="text/javascript" src="https://ssl.google-analytics.com/urchin.js">
</script>
<script type="text/javascript">
_uacct = "UA-448325-19";
urchinTracker('/errorweb-es-apache');
</script>



</body></html>