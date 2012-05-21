<?php
$count = mysql_num_rows(dbquery("SELECT DISTINCT(badge_id) FROM user_badges WHERE user_id = '".$user_id."'"));
$sql = dbquery("SELECT DISTINCT(badge_id) FROM user_badges WHERE user_id = '".$user_id."' LIMIT 16");
$desde = 1;
$hasta = 16;
$getBadges = mysql_num_rows(dbquery("SELECT DISTINCT(badge_id) FROM user_badges WHERE user_id = '".$user_id."' LIMIT 0,16"));
$n = $getBadges;
$x = 0;
while($n >= 0)
{
	$n = $n-16;
	$x++;
}

?>
<div class="movable widget BadgesWidget" id="widget-%id%" style=" left: %pos-x%px; top: %pos-y%px; z-index: %pos-z%;">
<div class="%skin%">
	<div class="widget-corner" id="widget-%id%-handle">
		<div class="widget-headline"><h3><span class="header-left">&nbsp;</span><span class="header-middle">Placas y Recompensas</span><span class="header-right">&nbsp;</span></h3>
		</div>	
	</div>
	<div class="widget-body">
		<div class="widget-content">
    <div id="badgelist-content">    <ul class="clearfix" style="height: 180px; ">
	<?php
	while($data = mysql_fetch_array($sql))
	{
	?>
            <li style="background-image: url(http://images.xukys-hotel.com/c_images/album1584/<?php echo $data['badge_id']; ?>.gif)"></li>
			<?php
			}//Termina while
	?>
    </ul>

        <div id="badge-list-paging">
        <?php echo $desde; ?> - <?php echo $getBadges; ?> / <?php echo $count; ?>
        <br>
		<?php
		if($count >= '17')
		{
		?>
	Primero |
        &lt;&lt; |
        <a href="#" id="badge-list-search-next">&gt;&gt;</a> |
        <a href="#" id="badge-list-search-last">Último</a>
        <input type="hidden" id="badgeListPageNumber" value="1">
        <input type="hidden" id="badgeListTotalPages" value="<?php echo $x; ?>">
		<?php
		}
		?>
        </div>
		
		<script type="text/javascript">
        document.observe("dom:loaded", function() {
            window.badgesWidget%id% = new BadgesWidget('%habboId%', '%id%');
        });
        </script>


</div>
		<div class="clear"></div>
		</div>
	</div>
</div>
</div>