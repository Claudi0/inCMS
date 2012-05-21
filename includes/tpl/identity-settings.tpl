<body id="embedpage"> 
<div id="overlay"></div> 


<div id="container"> 
 
    <div class="settings-container clearfix">

        <h1>Ajustes de la Cuenta</h1>

        <div id="back-link">

        <a href="%www%/identity/avatars">Mis Personajes</a> &raquo; Ajustes de la Cuenta  

        </div>

        

        <div style="padding: 0 10px">



        <h3>E-mail:</h3>

        <div class="opt-email">

           
 <?php echo $users->GetUserVar(USER_ID, 'mail'); ?><br />

            <!--<a id="manage-email" class="new-button" href="%www%/identity/email"><b>Cambiar Tu email</b><i></i></a>-->

        </div>

        <br clear="all"/>



        <h3>Usas para conectarte:</h3>

        <p>Aquí tienes una lista de los servicios web que utilizas para conectarte.</p>

        <div class="opt-auth-providers clearfix settings-auth" style="float: none; width: auto">        

                <p>

                	<img src="/web-gallery/v2/images/rpx/icon_habbo_big.png" style="vertical-align: middle" title="habbo"/>

                	<?php echo $users->GetUserVar(USER_ID, 'mail'); ?><br />

		 			<span class="last-access-time">

					    Ultima vez usado: *****

					</span>

                </p>

        <p>

        </p>

        </div>

        <br clear="all"/>

                

        <h3>Contraseña:</h3>
				<?php if (isset($_GET['passwordChanged'])) { ?><p class="confirmation">Tu Contraseña a sido Cambiada Correctamente!</p><?php } ?>
        <div class="opt-password">

            <span>**************</span>

            <a id="manage-password" class="new-button" href="%www%/identity/password"><b>Cambiar</b><i></i></a>

        </div>



        </div>

    </div>

    <div class="settings-container-bottom">
   
   </div>