<?php
if(!defined("NOWHOS"))
{
	define("NOWHOS", TRUE);
}
if(!defined("Xukys"))
{
define("Xukys", TRUE);
}
require_once('../global.php');

	if(!LOGGED_IN)
	{
		header('Location: '.WWW.'/');
	}

	$id = USER_ID;
	$Item = Array(true, true, true, true, true, true, true, false);

?>
<ul id="inventory-item-list">
	<?php if($Item[0] == True) { ?>
	<li id="inventory-item-p-5" 
		title="Libro de Invitados" class="webstore-widget-item <?php if($users->haveWidget($id, "GuestbookWidget")) { echo "webstore-widget-disabled"; } ?>">
		<div class="webstore-item-preview w_guestbookwidget_pre Widget">
			<div class="webstore-item-mask">
				
			</div>
		</div>
		<div class="webstore-widget-description">
			<h3>Libro de Invitados</h3>
			<p></p>
		</div>
	</li>
	<?php } ?>
	<?php if($Item[1] == True) { ?>

	<li id="inventory-item-p-3" 
		title="Mis Amigos" class="webstore-widget-item <?php if($users->haveWidget($id, "FriendsWidget")) { echo "webstore-widget-disabled"; } ?>">
		<div class="webstore-item-preview w_friendswidget_pre Widget">
			<div class="webstore-item-mask">
				
			</div>
		</div>
		<div class="webstore-widget-description">
			<h3>Mis Amigos</h3>
			<p></p>
		</div>
	</li>
	<?php } ?>
	<?php if($Item[2] == True) { ?>

	<li id="inventory-item-p-21" 
		title="Mis Placas" class="webstore-widget-item <?php if($users->haveWidget($id, "BadgesWidget")) { echo "webstore-widget-disabled"; } ?>">
		<div class="webstore-item-preview w_badgeswidget_pre Widget">
			<div class="webstore-item-mask">
				
			</div>
		</div>
		<div class="webstore-widget-description">
			<h3>Mis Placas</h3>
			<p>Muestra tus Placas en tu P�gina.</p>
		</div>
	</li>
	<?php } ?>
	<?php if($Item[3] == True) { ?>

	<li id="inventory-item-p-15" 
		title="Mis Votos" class="webstore-widget-item <?php if($users->haveWidget($id, "RatingWidget")) { echo "webstore-widget-disabled"; } ?>">
		<div class="webstore-item-preview w_ratingwidget_pre Widget">
			<div class="webstore-item-mask">
				
			</div>
		</div>
		<div class="webstore-widget-description">
			<h3>Mis Votos</h3>
			<p></p>
		</div>
	</li>
	<?php } ?>
	<?php if($Item[4] == True) { ?>

	<li id="inventory-item-p-7" 
		title="Mis Grupos" class="webstore-widget-item <?php if($users->haveWidget($id, "GroupsWidget")) { echo "webstore-widget-disabled"; } ?>">
		<div class="webstore-item-preview w_groupswidget_pre Widget">
			<div class="webstore-item-mask">
				
			</div>
		</div>
		<div class="webstore-widget-description">
			<h3>Mis Grupos</h3>
			<p></p>
		</div>
	</li>
	<?php } ?>
	<?php if($Item[5] == True) { ?>

	<li id="inventory-item-p-2" 
		title="Mis Salas" class="webstore-widget-item <?php if($users->haveWidget($id, "RoomsWidget")) { echo "webstore-widget-disabled"; } ?>">
		<div class="webstore-item-preview w_roomswidget_pre Widget">
			<div class="webstore-item-mask">
				
			</div>
		</div>
		<div class="webstore-widget-description">
			<h3>Mis Salas</h3>
			<p></p>
		</div>
	</li>
	<?php } ?>
	<?php if($Item[6] == True) { ?>

	<li id="inventory-item-p-17" 
		title="Reproductor" class="webstore-widget-item <?php if($users->haveWidget($id, "TraxPlayerWidget")) { echo "webstore-widget-disabled"; } ?>">
		<div class="webstore-item-preview w_traxplayerwidget_pre Widget">
			<div class="webstore-item-mask">
				
			</div>
		</div>
		<div class="webstore-widget-description">
			<h3>Reproductor</h3>
			<p>Haz que suenen tus canciones en tu Xukys Home</p>
		</div>
	</li>
	<?php } ?>
	<?php if($Item[7] == True) { ?>

	<li id="inventory-item-p-8" 
		title="Homes de Grupos" class="webstore-widget-item">
		<div class="webstore-item-preview w_memberwidget_pre Widget">
			<div class="webstore-item-mask">
				
			</div>
		</div>
		<div class="webstore-widget-description">
			<h3>Homes de Grupos</h3>
			<p></p>
		</div>
	</li>	
	<li class="webstore-item-empty webstore-widget-empty"></li>
	<li class="webstore-item-empty webstore-widget-empty"></li>
	<?php } ?>
</ul>