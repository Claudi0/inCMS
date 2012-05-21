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
<div class="habblet-container ">		
	
	<div id="news-habblet-container">
	
		<div class="title">
		
			<div class="habblet-close"></div>
			
			<div>The shit you don't even wanna know!</div>
			
		</div>
		
		<div class="content-container">
		
			<div id="news-articles">
			
				<ul id="news-articlelist" class="articlelist" style="display: none">
				<?php
				
				$getNews = mysql_query("SELECT * FROM cms_news WHERE type = 'article' ORDER BY id DESC LIMIT 10");
				
				$oddEven = "odd";
				while ($n = mysql_fetch_assoc($getNews))
				{
					if ($oddEven == "odd")
					{
						$oddEven = "even";
					}
					else
					{
						$oddEven = "odd";
					}
			
					echo '<li class="' . $oddEven . '">
					
					  <div class="news-title">' . $n['title'] . '</div>
					  <div class="news-summary">' . $n['short_story'] . '</div>
					  <div class="newsitem-date">' . $n['date'] . '</div>
					  
					  <div class="clearfix">
					  
						<a href="http://' . $path.$subpath . '/articles/' . $n['id'] . '-' . stringToURL(HoloText($n['title'], true),true,true) . '" target="_blank" class="article-toggle">Read on site</a>
						
					  </div>
					  
					</li>';
				}
					
				?>
				</ul>
				
			</div>
			
		</div>
		
		<div class="news-footer"></div>
	
	</div>

	<script type="text/javascript">    
		L10N.put("news.promo.readmore", "Read more").put("news.promo.close", "Close article");
		News.init(false);
	</script>

</div>

<!-- dependencies
<link rel="stylesheet" href="%www%/web-gallery/v2/styles/news.css" type="text/css" />
<script src="%www%/web-gallery/static/js/news.js" type="text/javascript"></script>
-->
