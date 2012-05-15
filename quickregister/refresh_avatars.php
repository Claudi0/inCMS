<?php
$page['id']="0";
$page['sub_id']="0";
$page['name']="index";
$page['redirect']="0";
require_once("./../includes/core.php");
$looks_query = mysql_query("SELECT look FROM users WHERE gender = '".$_SESSION['bean_gender']."' ORDER BY RAND() LIMIT 6");
while($looks_result = mysql_fetch_array($looks_query)){
?>
<li>
    <span class="bgtop"></span>
    <span class="bgbottom"></span>
    <img alt="<?php echo $looks_result['look']; ?>" src="http://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $looks_result['look']; ?>&size=b&direction=4&head_direction=4&crr=0&gesture=sml&frame=1" width="64" height="110"/>
</li>
<?php
}
mysql_free_result($looks_query);
?>
