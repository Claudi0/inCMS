<div class="habblet-container ">
<div class="cbb clearfix orange ">

<h2 class="title">Consiga Moedas</h2>

<div class="method-group online clearfix">
	<div class="method idx0">

		<div class="method-content">
			<h2>Moedas Gratis!</h2>
			<div class="summary clearfix">

            Habbo Moedas s�o gr�tis! A cada 3 horas, iremos complementar e refil seus cr�ditos at� um lote de 3000, para garantir que voc� nunca se esgotam. Voc� n�o precisa nem mesmo ser registrado no hotel!

			</div>
		</div>

        <div class="smallprint">
			<style type="text/css">.method-group.online .method.idx0 h2 {font-size:26px !important;}</style>
        </div>

</div>
<div class="method idx1 nosmallprint">
    <div class="method-content">
        <h2>Quando eu pego?</h2>

        <div class="summary clearfix">
		<div id="credits-countdown">

		<style type="text/css">
		/** Credits widget **/
		#credits-countdown { height: 40px; border: 1px solid #E6E6E6; margin: 10px; background-color: #F2F2F2; padding: 10px; }
		#credits-countdown ul { list-style: none; margin-top: 5px; }
		#next-update-heading { float: left; vertical-algin: middle; padding: 5px; margin-right: 10px; }
		.countdown-bit { float: left; background-color: #E6E6E6; padding: 5px; text-align: center; width: 50px; font-weight:bold; font-size: 120%; }
		.countdown-seperator-bit { float: left; padding: 5px; vertical-align: middle; font-weight: bold; font-size: 120%; text-align: center; }
		</style>

			<ul>

				<li class="countdown-bit">
					<div id="cd-hours">
						00
					</div>
				</li>

				<li class="countdown-seperator-bit">
					:
				</li>

				<li class="countdown-bit">
					<div id="cd-mins">
						00
					</div>
				</li>

				<li class="countdown-seperator-bit">
					:
				</li>

				<li class="countdown-bit">
					<div id="cd-secs">
						00
					</div>
				</li>

				<li class="countdown-seperator-bit" style="font-size: 70%; margin-left: 15px; font-weight: normal;">
					Quando o contador chegar a 0,<br />			</li>

			</ul>

<script type="text/javascript">

			<?php

			$last_exec = intval(mysql_result(dbquery("SELECT last_exec FROM site_cron WHERE scriptfile = 'credits.php' LIMIT 1"), 0));
			$next_exec = $last_exec + 10800;
			$diff = $next_exec - time();

			echo 'var timeLeft = ' . $diff . ';';

			?>

			function showCountdownResult()
			{
				document.getElementById('credits-countdown').innerHTML = "<h3 style='color: darkgreen;'>Creditos actualizados</h3><p>Acabamos de enviar moedas para sua conta relogue no Hotel.</p>";
				window.setTimeout("location.reload(true);", 2500);
			}

			function doCountdown()
			{
				var t = timeLeft;

				var uur = parseInt(t / 3600);
				t -= (uur * 3600);

				var min = parseInt(t / 60);
				t -= (min * 60);

				var sec = t;

				if (uur.toString().length <= 1) { uur = "0" + uur; }
				if (min.toString().length <= 1) { min = "0" + min; }
				if (sec.toString().length <= 1) { sec = "0" + sec; }

				document.getElementById('cd-hours').innerHTML = uur.toString();
				document.getElementById('cd-mins').innerHTML = min.toString();
				document.getElementById('cd-secs').innerHTML = sec.toString();

				if (timeLeft > 0)
				{
					window.setTimeout("doCountdown()", 1000);
				}
				else
				{
					window.setTimeout("showCountdownResult()", 1000);
				}

				timeLeft--;
			}

			doCountdown();

			</script>

		</div>
        </div>

    </div>




</div>
</div>



<script type="text/javascript">
document.observe("dom:loaded", function() { new CreditsList(); });
</script>



<div class="disclaimer" style="border: 0 !important;">
    <h3><span>Only moedass gratis</span></h3>
   Nunca combramos por moedas sempre ser�o de gra�a.<br />

</div>



					</div>
				</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>




