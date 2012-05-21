<?php
error_reporting(0);
define('CMS', 'uber'); // Sólo se puede usar en Uber  && LAVVOCMS
define('id', (CMS == 'uber' ? USER_ID : $my_id));
define('moneda', 'vip_points');//Configura tu moneda aquí
define('nombre_moneda', 'Puntos vip');//configura el nombre de la moneda aquí
define('price', '20');//configura el precio aquí xd
if(CMS == 'uber')
$online = $users->GetUserVar(USER_ID, 'online');
else
$online = $myrow['online'];
if(isset($_POST['caballo'])):
        $moneda = (CMS == 'uber' ? $users->GetUserVar(USER_ID, moneda) : $myrow[moneda]);
        $error = array();
        if($moneda < price)
                $error[] = "Lo sentimos, no tienes suficientes ".nombre_moneda;
        if(empty($_POST['caballo_name']))
                $error[] = "Lo sentimos, es necesario ponerle nombre a tu caballo";
        if($online !== 0)
                $error[] = "Debes de estar offline en el hotel";
        if(empty($error)):
                $sucess = "Caballo comprado con &eacute;xito!";
                $cambio = $moneda-price;
                mysql_query("UPDATE users SET ".moneda." = '".$cambio."' WHERE id = '".id."'");
                mysql_query("INSERT INTO `user_pets` (`user_id`, `room_id`, `name`, `race`, `color`, `type`, `expirience`, `energy`, `nutrition`, `respect`, `createstamp`, `x`, `y`, `z`) VALUES ('".id."', '0', '".mysql_real_escape_string($_POST['caballo_name'])."', '".mysql_real_escape_string($_POST['caballo_race'])."', 'FFFFFF', '13', '20', '100', '100', '0', '".time()."', '0', '0', '0')");
        endif;
        foreach($error as $errors)
                $errorz = $errors;
endif;
 
?>
<div class="habblet-container ">
                                                <div class="cbb clearfix red">
 
                                               
                                                <div class="habblet box-content"><br><center><b>Canjea tus <?php echo nombre_moneda ?></b></center><br>
                                        <?php if(!empty($error)): echo '<b>'.$errorz.'</b>'; endif;
if(!empty($sucess)): echo '<b>'.$sucess.'</b>';  endif; ?>
 
                                                <hr style="color:#9596AB">
                                                        <h3>Caballos</h3>
                                                        iYa empezamos a lucir caballos! Ahora podras pedir el tuyo,
                                                        ponle el nombre y elige una raza. El caballo te costar&aacute; <b><?php echo number_format(price) . ' '.nombre_moneda ; ?></b>.</div>
                                                        <form method="post"><br>
                                                                <strong style="margin-left:40px;">Nombre:</strong>
                                                                <input type="text" name="caballo.name"/><br>
                                                                <strong style="margin-left:40px;">N&uacute;mero de Raza:</strong>
                                                                <select name="caballo.race">   
                                                                <?php
                                                                for($i=1;$i <= 77;$i  )
                                                                echo '<option value="'.$i.'">'.$i.'</option>';
                                                                ?>
                                                                </select>
                                                                <input type="submit" name="caballo" value="Comprar"/>
                                                        </form>
                                                        <br><br>
</div>
                                       
                                        </div>
 
                                <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
