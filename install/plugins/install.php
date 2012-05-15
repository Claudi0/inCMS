<?php
define('USERNAME_REQUIRED', FALSE);
define('ACCOUNT_REQUIRED', FALSE);
include('./SYSTEM/CP.Global.php');
//permission ranks
if(!$core->CheckColumns('permissions_ranks', 'hk_login'))
mysql_query("ALTER TABLE permissions_ranks ADD hk_login enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_ranks', 'hk_basics'))
mysql_query("ALTER TABLE permissions_ranks ADD hk_basics enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_ranks', 'hk_news'))
mysql_query("ALTER TABLE permissions_ranks ADD hk_news enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_ranks', 'hk_users'))
mysql_query("ALTER TABLE permissions_ranks ADD hk_users enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_ranks', 'hk_rooms'))
mysql_query("ALTER TABLE permissions_ranks ADD hk_rooms enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_ranks', 'hk_edit'))
mysql_query("ALTER TABLE permissions_ranks ADD hk_edit enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_ranks', 'hk_mod'))
mysql_query("ALTER TABLE permissions_ranks ADD hk_mod enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_ranks', 'hk_voucher'))
mysql_query("ALTER TABLE permissions_ranks ADD hk_voucher enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_ranks', 'hk_badge'))
mysql_query("ALTER TABLE permissions_ranks ADD hk_badge enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_ranks', 'hk_ban'))
mysql_query("ALTER TABLE permissions_ranks ADD hk_ban enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_ranks', 'hk_iplookup'))
mysql_query("ALTER TABLE permissions_ranks ADD hk_iplookup enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_ranks', 'hk_delete'))
mysql_query("ALTER TABLE permissions_ranks ADD hk_delete enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_ranks', 'hk_ha'))
mysql_query("ALTER TABLE permissions_ranks ADD hk_ha enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_ranks', 'hk_ext_login'))
mysql_query("ALTER TABLE permissions_ranks ADD hk_ext_login enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_ranks', 'hk_permissions'))
mysql_query("ALTER TABLE permissions_ranks ADD hk_permissions enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_ranks', 'hk_plugins'))
mysql_query("ALTER TABLE permissions_ranks ADD hk_plugins enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
//permission users
if(!$core->CheckColumns('permissions_users', 'hk_login'))
mysql_query("ALTER TABLE permissions_users ADD hk_login enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_users', 'hk_basics'))
mysql_query("ALTER TABLE permissions_users ADD hk_basics enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_users', 'hk_news'))
mysql_query("ALTER TABLE permissions_users ADD hk_news enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_users', 'hk_users'))
mysql_query("ALTER TABLE permissions_users ADD hk_users enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_users', 'hk_rooms'))
mysql_query("ALTER TABLE permissions_users ADD hk_rooms enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_users', 'hk_edit'))
mysql_query("ALTER TABLE permissions_users ADD hk_edit enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_users', 'hk_mod'))
mysql_query("ALTER TABLE permissions_users ADD hk_mod enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_users', 'hk_voucher'))
mysql_query("ALTER TABLE permissions_users ADD hk_voucher enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_users', 'hk_badge'))
mysql_query("ALTER TABLE permissions_users ADD hk_badge enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_users', 'hk_ban'))
mysql_query("ALTER TABLE permissions_users ADD hk_ban enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_users', 'hk_iplookup'))
mysql_query("ALTER TABLE permissions_users ADD hk_iplookup enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_users', 'hk_delete'))
mysql_query("ALTER TABLE permissions_users ADD hk_delete enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_users', 'hk_ha'))
mysql_query("ALTER TABLE permissions_users ADD hk_ha enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_users', 'hk_ext_login'))
mysql_query("ALTER TABLE permissions_users ADD hk_ext_login enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_users', 'hk_permissions'))
mysql_query("ALTER TABLE permissions_users ADD hk_permissions enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");
if(!$core->CheckColumns('permissions_users', 'hk_plugins'))
mysql_query("ALTER TABLE permissions_users ADD hk_plugins enum('1','0') collate utf8_unicode_ci NOT NULL default '0'");

//Update group permissions
mysql_query("UPDATE  permissions_ranks SET  hk_login =  '1', hk_basics =  '1', hk_news =  '1', hk_users =  '1', hk_rooms =  '1', hk_edit =  '1', hk_mod =  '1', hk_voucher =  '1', hk_badge =  '1', hk_ban =  '1', hk_iplookup =  '1', hk_delete =  '1', hk_ha =  '1', hk_ext_login =  '1', hk_permissions = '1', hk_plugins = '1'WHERE rank = 7;");
mysql_query("UPDATE  permissions_ranks SET  hk_login =  '1', hk_basics =  '1', hk_news =  '1', hk_users =  '1', hk_rooms =  '1', hk_edit =  '1', hk_mod =  '1', hk_voucher =  '1', hk_badge =  '1', hk_ban =  '1', hk_iplookup =  '1', hk_delete =  '1', hk_ha =  '1', hk_permissions = '1' WHERE rank = 6;");
mysql_query("UPDATE  permissions_ranks SET  hk_login =  '1', hk_users =  '1', hk_rooms =  '1', hk_mod =  '1', hk_ban =  '1' WHERE rank = 5;");
mysql_query("UPDATE  permissions_ranks SET  hk_login =  '1', hk_users =  '1', hk_rooms =  '1', hk_mod =  '1', hk_ban =  '1' WHERE rank = 4;");

//Plugin table
mysql_query("CREATE TABLE IF NOT EXISTS `plugin` (`id` int(11) NOT NULL AUTO_INCREMENT,`name` text NOT NULL,`uninstall_code` text NOT NULL,`hk_tab` enum('1','0') NOT NULL,`hk_text` text NOT NULL,`hk_link` text NOT NULL,`cms_tab` enum('0','home','community') NOT NULL,`cms_text` text NOT NULL,`cms_link` text NOT NULL,PRIMARY KEY (`id`))");

//Client settings
mysql_query("INSERT IGNORE INTO cms_settings SET variable = 'client_swf_path', value = '', description = 'The url to your SWF Path', example = 'http://localhost/gordon/'");
mysql_query("INSERT IGNORE INTO cms_settings SET variable = 'client_habbo_swf', value = '', description = 'The url to your Habbo SWF', example = 'http://localhost/gordon/Habbo.swf'");

//CMS Settings
mysql_query("INSERT IGNORE INTO cms_settings SET variable = 'maintenance', value = 'false', description = 'Maintenance', example = 'true or false'");

echo 'Database Updated, DELETE THIS FILE.'
?>