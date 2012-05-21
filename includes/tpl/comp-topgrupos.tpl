				<div class="habblet-container ">		
						<div class="cbb clearfix blue ">
<div class="box-tabs-container clearfix">
       
</div>
           <h2>Informações</h2>    
<div id="tab-0-0-2-content" >
<div id="hotgroups-habblet-list-container" class="habblet-list-container groups-list">    

    
    <div id="hotgroups-list-hidden-h111" style="display: none">
    <ul class="habblet-list two-cols clearfix">
<?php
$i = 10;
$j = 1;
$getem = mysql_query("SELECT * FROM groups_details ORDER BY views DESC LIMIT 40 OFFSET 10") or die(mysql_error());

while ($row = mysql_fetch_assoc($getem))
{
	$i++;

	if(IsEven($i) == "even")
		$left = "right";
	else
	{
		$left = "left";
		$j++;
	}
		
	if(IsEven($j) == "even")
		$even = "even";
	else
		$even = "odd";
?>
			
<?php } ?>
</ul>
</div>
    <div class="clearfix">
        <h4>Bem vindos a comunidade da OnlyCMS 2.0, para editar essa box vá em nucleo -> tpl -> comp-topgrupos.</h4>
    </div>
<script type="text/javascript">
var hotGroupsMoreDataHelper = new MoreDataHelper("hotgroups-toggle-more-data-h111", "hotgroups-list-hidden-h111","groups");
</script>
</div>
</div>				
</div>				