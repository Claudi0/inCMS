<div id="column1" class="column"> 
			     		
				<div class="habblet-container ">		
	
						<div class="cbb clearfix green"> 
    <h2 class="title">Register for free</h2> 
    <div class="box-content"> 
        <p>¡Registrate Gratis y empieza a jugar! ¿ya estás registrado? Por favor, accede a la derecha.</p> 
        <div class="register-button clearfix"> 
            <a href="%www%/quickregister/email_password" onclick="HabboClient.closeHabboAndOpenMainWindow(this); return false;">Juega a Habbo Gratis</a> 
            <span></span> 
        </div>                
    </div> 
</div> 
	
						
					
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 
			 
 
</div> 
<div id="column2" class="column"> 
			     		
				<div class="habblet-container ">		
	
						<div class="logincontainer"> 
<div class="cbb loginbox clearfix"> 
    <h2 class="title">Entrar al Hotel</h2> 
    <div class="box-content clearfix" id="login-habblet"> 
        <form action="%www%/account/submit" method="post" class="login-habblet"> 
		
			<input type="hidden" name="page" value="%www%/client">
            
            <ul> 
                <li> 
                    <label for="login-username" class="login-text">Usuario</label> 
                    <input tabindex="1" type="text" class="login-field" name="credentials.username" id="login-username" value="" maxlength="32" /> 
                </li> 
                <li> 
                    <label for="login-password" class="login-text">Contraseña</label> 
                    <input tabindex="2" type="password" class="login-field" name="credentials.password" id="login-password" maxlength="32" /> 
                    <input type="submit" value="Sign in" class="submit" id="login-submit-button"/> 
                    <a href="#" id="login-submit-new-button" class="new-button" style="margin-left: 0;display:none"><b style="padding-left: 10px; padding-right: 7px; width: 55px">Entrar</b><i></i></a> 
                </li> 
                

                
                <li id="remember-me" class="no-label"> 
                    <input tabindex="4" type="checkbox" name="_login_remember_me" id="login-remember-me" value="true"/> 
                    <label for="login-remember-me">Recuerdame</label> 
                </li> 
                <li id="register-link" class="no-label"> 
                    <a href="%www%/quickregister/email_password" class="login-register-link" onclick="HabboClient.closeHabboAndOpenMainWindow(this); return false;"><span>Registrate Gratis</span></a> 
                </li> 
                <li class="no-label"> 
                    <a href="%www%/account/password/forgot" id="forgot-password"><span>He olvido mi clave o usuario</span></a> 
                </li> 
            </ul> 
<div id="remember-me-notification" class="bottom-bubble" style="display:none;"> 
	<div class="bottom-bubble-t"><div></div></div> 
	<div class="bottom-bubble-c"> 
                Ha Seleccionando 'recuerdame', aparecera tu cuenta en este ordenador hasta que haga clic en 'Salir'. Si este es un ordenador publico, es mejor no utilizar esta funcion.	</div> 
	<div class="bottom-bubble-b"><div></div></div> 
</div> 
        </form> 
 
    </div> 
</div> 
</div> 
<script type="text/javascript"> 
L10N.put("authentication.form.name", "Username");
L10N.put("authentication.form.password", "Password");
HabboView.add(function() {LoginFormUI.init();});
HabboView.add(function() {window.setTimeout(function() {RememberMeUI.init("newfrontpage");}, 100)});
</script> 
	
						
					
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 