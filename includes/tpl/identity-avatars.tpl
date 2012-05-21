<?php
/*=======================================================================
| UberCMS - Advanced Website and Content Management System for uberEmu
| #######################################################################
| Copyright (c) 2011, Roy 'Meth0d'
| http://www.meth0d.org & http://www.sulake.biz
| #######################################################################
| This program is free software: you can redistribute it and/or modify
| it under the terms of the GNU General Public License as published by
| the Free Software Foundation, either version 3 of the License, or
| (at your option) any later version.
| #######################################################################
| This program is distributed in the hope that it will be useful,
| but WITHOUT ANY WARRANTY; without even the implied warranty of
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
| GNU General Public License for more details.
\======================================================================*/


$getCoins = dbquery("SELECT * FROM users WHERE username = '".USER_NAME."'");
$myrow = mysql_fetch_assoc($getCoins);
?>

<body id="embedpage"> 
<div id="overlay"></div> 

<div id="container"> 
 
    <div id="select-avatar">

	<div class="pick-avatar-container clearfix">

        <div class="title">

            <span class="habblet-close"></span>

            <h1>Elije tu personaje</h1>

        </div>

		<div id="content">

            <div id="user-info">

                  <img src="http://static.ak.fbcdn.net/pics/q_silhouette.gif"/>

              <div>

                  <?php echo $users->GetUserVar(USER_ID, 'username'); ?>

                  <a href="/account/logout" id="logout">Cerrar</a>

                  <a href="/identity/settings" id="manage-account">Ajustes de la cuenta</a>

              </div>



            </div>
            
            %errors%
            
						<?php
							
							$result = dbquery("SELECT `id`,`username`,`last_online`,`look`,`password` FROM `users` WHERE `mail` = '".$myrow['mail']."'");
							
							$i = 0;
							while ($row = mysql_fetch_array($result, MYSQL_NUM))
							{
								
						?>
            <div id="first-avatar">

                <img src="http://www.habbo.com/habbo-imaging/avatarimage?figure=<?php echo $row[3]; ?>" width="64" height="110"/>

                <div id="first-avatar-info">

                    <div class="first-avatar-name"><?php echo $row[1]; ?></div>

                    <div class="first-avatar-lastonline">&Uacute;ltima conexi&oacute;n: <span><?php echo substr($datum = $row[2], 0, strpos($datum, ' ')); ?></span></div>

										<?php if ($row[4] <> $_SESSION['UBER_USER_H'])
											echo "<div id='first-avatar-play-link' style='color: darkred;'>You can't play on this Habbo.</a></div>";
										else
										{ ?>
										<a id="first-avatar-play-link" href="%www%/identity/useOrCreateAvatar/<?php echo $row[0]; ?>">

                        <div class="play-button-container">

                            <div class="play-button"><div class="play-text">Jugar</div></div>

                            <div class="play-button-end"></div>

                        </div>

                  </a><?php } ?>

                </div>

            </div>
							
						<?php
								$i++;
							}
						
							$over = 10 - $i;
							if ($over <> 0)
								echo '<div id="link-new-avatar"><a class="new-button" href="'.WWW.'/identity/add_avatar"><b>A&ntilde;adir</b><i></i></a></div>';

            	echo '<p style="margin: 5px 10px">Puedes tener '.$over.' Habbos mas.</p>';
            
            ?>

            <div class="other-avatars">

            </div>

        </div>

    </div>

    <div class="pick-avatar-container-bottom"></div>

  </div> 