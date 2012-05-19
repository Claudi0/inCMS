<?php
require_once("./asecore.php");
if(!isset($_SESSION['id'])) {
if(get_userinfo("rank")>=5) {
header("Location: ./error.php");
}
}
?>
<title><?php echo get_title(); ?> - Panel</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="data/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="data/js/ui/jquery-ui-1.8.17.custom.min.js"></script>
<script type="text/javascript" src="data/js/jquery.corner.js"></script>
<script type="text/javascript" src="data/js/jquery.validate.js"></script>
<script type="text/javascript" src="data/js/css_browser_selector.js"></script>
<script type="text/javascript" src="data/js/jqtransformplugin/jquery.jqtransform.js"></script>
<script type="text/javascript" src="data/js/jquery.jqplot.min.js"></script>
<script type="text/javascript" src="data/js/plugins/jqplot.highlighter.min.js"></script>
<script type="text/javascript" src="data/js/plugins/jqplot.cursor.min.js"></script>
<script type="text/javascript" src="data/js/plugins/jqplot.pieRenderer.min.js"></script>
<script type="text/javascript" src="data/js/plugins/jqplot.dateAxisRenderer.min.js"></script>
<script type="text/javascript" src="data/js/editor/jquery.cleditor.min.js"></script>
<script type="text/javascript" src="data/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="data/js/fancybox/jquery.easing-1.4.pack.js"></script>
<script type="text/javascript" src="data/js/js.js"></script>
<link rel="stylesheet" href="data/css/reset.css" type="text/css" />
<link rel="stylesheet" href="data/css/grid.css" type="text/css" />
<link rel="stylesheet" href="data/css/style.css" type="text/css" />
<link type="text/css" href="data/js/ui/admincp/jquery-ui-1.8.17.custom.css" rel="stylesheet" />
<link rel="stylesheet" href="data/js/plugins/jquery.jqplot.min.css" type="text/css" />
<link rel="stylesheet" href="data/js/editor/jquery.cleditor.css" type="text/css" />
<link rel="stylesheet" href="data/js/jqtransformplugin/jqtransform.css" type="text/css" />
<link rel="stylesheet" href="data/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" />
<link type="text/css" rel="stylesheet" href="includes/style.css" />
	<script type="text/javascript" src="includes/jquery.tooltip.js"></script>
	<script language="javascript">
		var OldPage = 'basics';
		
		function LoadPage(PageName) {
		    $('.page').css('display', 'none');
		    $('.overlay').css('display', 'none');
			$.ajax({
			   type: "POST",
			   url: PageName + ".php",
			   success: function(msg){
			     $('.conColumn1').html(msg);
			     $('li#' + OldPage).removeClass('selected');
			     $('li#' + PageName).addClass('selected');
			     OldPage = PageName;
			   }
			 });
		}
		
		$(document).ready(function() {
			LoadPage('basics');
		});
	</script>
</head>
<body>
<script class="code" type="text/javascript"><!-- Plugin Examples -->
$(document).ready(function(){
	  var line1=[['07-Dec-11', 320], ['08-Dec-11', 350], ['09-Dec-11', 355], ['10-Dec-11', 420], ['11-Dec-11', 407], ['12-Dec-11', 320], ['13-Dec-11', 401], ['14-Dec-11', 353], ['15-Dec-11', 402], ['16-Dec-11', 471], ['17-Dec-11', 555]];
	  var plot1 = $.jqplot('chart1', [line1], {
		  title:'Unique visitors by days',
		  axes:{
			xaxis:{
			  renderer:$.jqplot.DateAxisRenderer,
			  tickOptions:{
				formatString:'%b&nbsp;%#d'
			  } 
			},
			yaxis:{
			  tickOptions:{
				formatString:'%.0f Visitors'
				}
			}
		  },
		  highlighter: {
			show: true,
			sizeAdjust: 10
		  },
		  cursor: {
			show: false
		  }
	  });
	  
	$('#mainpageTabs').tabs();
	
	$('.accordion').accordion();
	
	$('#progress1').progressbar({value: 25});
	$('#progress2').progressbar({value: 50});
	$('#progress3').progressbar({value: 100});
		
	$('#dialog').dialog({
		autoOpen: false,
		width: 600,
		buttons: {
			"Ok": function() { 
				$(this).dialog("close"); 
			}, 
			"Cancel": function() { 
				$(this).dialog("close"); 
			} 
		}
	});
	
	$('#openDialog').click(function(){
		$('#dialog').dialog('open');
		return false;
	});
	
	$('#dialog_link, ul.icons li').hover(
		function() { $(this).addClass('ui-state-hover'); }, 
		function() { $(this).removeClass('ui-state-hover'); }
	);
});
</script>
	<div id="main" class="container_12"><!-- Body Wrapper Begin -->
		<div id="header"><!-- Header Begin -->
			<div class="grid_3"><a href="#" id="logo" class="float_left">AdminCP</a></div>
			<div class="grid_4 push_5">
				<div id="search"><!-- Header Search Begin -->
					<input type="text" placeholder="Search..." id="searchinput" name="search" />
					<input type="submit" id="searchbutton" name="search" />
				</div><!-- Header Search End -->
			</div>
		</div><!-- Header End -->
		<div class="clear"></div>
		<div id="userbar"><!-- Userbar Begin -->
			<div id="profile"><!-- Profile Begin -->
				<div id="avatar">
					<img src="img/test_avatar.png" alt="Avatar" height="44" />
					<a href="#" id="unreadcount"><?php echo get_userinfo("rank"); ?></a>
				</div>
				<div id="profileinfo">
					<h3 id="username"><?php echo get_userinfo("username"); ?></h3>
					<span id="subline">Welcome</span>
					<div class="clear"></div>
					<a href="../index.php" class="profilebutton">Logout</a>
				</div>
			</div><!-- Userbar End -->
			<ul id="navigation"><!-- Main Navigation Begin -->
			<li onclick="LoadPage('basics');" id="basics"><a class="active_page">Basics</a></li>
				<li onclick="LoadPage('news');" id="news"><a class="icon_article">News</a></li>
				<li onclick="LoadPage('users');" id="users" ><a class="icon_users">Users</a></li>
				<li onclick="LoadPage('rooms');" id="rooms" ><a class="icon_email">Rooms</a></li>
                <li onclick="LoadPage('mod');" id="mod" ><a class="icon_folder">MOD</a></li>
                <li onclick="LoadPage('voucher');" id="voucher" ><a class="icon_article">Credits</a></li>
                <li onclick="LoadPage('badge');" id="badge" ><a class="icon_logout">Badge</a></li>
                <li onclick="LoadPage('permissions');" id="permissions" ><a class="icon_folder">Ranks</a></li>
			</ul><!-- Main Navigation End -->
		</div><!-- Userbar End -->
		<div class="clear"></div>
		<div class="error grid_12"><h3>Welcome to inCMS Panel by: Claudi0</h3><a href="#" class="hide_btn">&nbsp;</a></div><!-- Notification -->
		<div id="body">
			<div class="block big"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Statistics</h3>
					<a href="#" class="toggle">&nbsp;</a>
				</div>
				<div class="block_cont">
				<div id="chart1" style="height:300px; width:100%;"></div>
				</div>
				
			</div><!-- Block End -->
			<div class="overlay hidden"></div>
			<div class="block big"><!-- Block Begin -->
			<div class="titlebar">
					<h3>Configurations</h3>
					<a href="#" class="toggle">&nbsp;</a>
					<div class="block_cont">
				<div class="conColumn1">
	</div>
				</div>
				</div></div></div>
			<div class="block small"><!-- Block Begin -->
				<div class="titlebar">
					<h3>Progresso</h3>
					<a href="#" class="toggle">&nbsp;</a>
				</div>
				<div class="block_cont">
					<div id="progress1"></div><br />
					<div id="progress2"></div><br />
					<div id="progress3"></div><br />
				</div>
			</div><!-- Block End -->
			
		
	</div><!-- Body Wrapper End -->
	
</body>