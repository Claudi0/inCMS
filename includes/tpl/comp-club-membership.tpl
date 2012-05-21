<div class="habblet-container ">
						<div class="cbb clearfix hcred ">

							<h2 class="title">Mi membresia
							</h2>

<?php if (LOGGED_IN) { ?>
						<script src="%www%/web-gallery/static/js/habboclub.js" type="text/javascript"></script>
<div id="hc-habblet">
    <div id="hc-membership-info" class="box-content">
<?php

$clubDays = $users->GetClubDays(USER_ID);

if ($clubDays <= 0)
{
	echo '<p>No eres miembro del habbo Club.</p>';
}
else
{
	echo '<p>No eres miembro del habbo Club</p>';
	echo '<p>Todavia tienes <b>' . $clubDays . ' días</b> de membresía.</p>';
}

?>
    </div>
    <div id="hc-buy-container" class="box-content">
		<div id="hc-buy-buttons" class="hc-buy-buttons rounded rounded-hcred">
		<?php if ($users->GetUserVar(USER_ID, 'credits') < 200) { ?>

            <form class="subscribe-form" method="post">
                <input type="hidden" id="settings-figure" name="figureData" value="">
                <input type="hidden" id="settings-gender" name="newGender" value="">
                <table width="97%" style="text-align: center;">
                  <p class="credits-notice">Para unirte al habbo Club tienes que comprar creditos:</p>
                  <p class="credits-notice">Habbo cuesta 20 creditos</p>
                  <a class="new-button fill" href="%www%/credits"><b>Consigue creditos.</b><i></i></a>
                </table>
            </form>

		<?php } else { ?>
		<p>Si quieres comprar o extender tu membresía, comprala en el catálogo.</p>
		<?php } ?>
		</div>
    </div>
</div>
<?php } else { ?>
<div id="hc-habblet" class='box-content'>
Porfavor registrate pera ver tu membresia del habbo Club
</div>
<?php } ?>


					</div>
				</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>