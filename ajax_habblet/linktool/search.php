<?php


$Type = $_GET["scope"];
$Data = $_GET["query"];
$Query = Array();

if(strlen($Data) > 2)
{
	if($Type == "1")
	{
		$resultType = "habbo";
		$Name = "username";
		$Query = mysql_query("SELECT id, username FROM users WHERE username LIKE '%" . $Data . "%' LIMIT 5");
	}
	else if($Type == "2")
	{
		$resultType = "room";
		$Name = "caption";
		$Query = mysql_query("SELECT id, caption FROM rooms WHERE caption LIKE '%" . $Data . "%' LIMIT 5");
	}
	else if($Type == "3")
	{
		$resultType = "group";
		$Name = "name";
		$Query = mysql_query("SELECT id, name FROM groups_details WHERE name LIKE '%" . $Data . "%' LIMIT 5");
	}
}
?>
<ul>
	<li>Haz clic para a�adirlo al documento</li>
<?php
while ($Row = mysql_fetch_array($Query))
{
?>
    <li><a href="#" class="linktool-result" type="<?php echo $resultType; ?>" 
    	value="<?php echo $Row["id"]; ?>" title="<?php echo $Row[$Name]; ?>"><?php echo $Row[$Name]; ?></a></li>
<?php
}
?>