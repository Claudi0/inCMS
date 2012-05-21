<?php
require_once($_SERVER["DOCUMENT_ROOT"]."/includes/config.php");
$connect=mysql_connect($configuration['mysql_host'],$configuration['mysql_user'],$configuration['mysql_password']);
$db=mysql_select_db($configuration['mysql_database']);
function get_settings($var){
$var2=mysql_real_escape_string($var);
$sql=mysql_query("SELECT value FROM `cms_settings` WHERE `variable` LIKE '$var2'");
$return=mysql_fetch_array($sql);
return $return['value'];
}
?>
<rss xmlns:dc="http://purl.org/dc/elements/1.1/" version="2.0">
  <channel>
    <title><?php echo get_settings("hotel_name"); ?>:</title>
    <link><?php echo get_settings("hotel_url"); ?></link>
<?php
$get_news=mysql_query("SELECT * FROM `cms_news` ORDER BY `id` DESC LIMIT 10");
while($news=mysql_fetch_array($get_news)){
?>
    <item>
      <title><?php echo $news['title']; ?></title>

      <link><?php echo get_settings("hotel_url")."articles/".$news['id']; ?></link>
      <description><?php echo $news['summary']; ?></description>
      <pubDate><?php echo date("d-M-Y", $news['date']); ?></pubDate>
      <guid isPermaLink="false"><?php echo get_settings("hotel_url")."articles/".$news['id']; ?></guid>
      <dc:date><?php echo date("d-M-Y", $news['date']); ?></dc:date>
    </item>
  </channel>
</rss>
<?php
}
?>

