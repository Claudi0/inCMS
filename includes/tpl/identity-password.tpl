<title>Ajustes de la cuenta</title>

<body id="embedpage"> 
<div id="overlay"></div> 

<div id="container"> 
 
    <div class="settings-container clearfix">

        <h1>Ajustes de la cuenta</h1>

	        <div id="back-link">

	        	<a href="%www%/identity/avatars">Mis personajes</a> &raquo; <a href="%www%/identity/settings"> Ajustes de la cuenta</a> &raquo; Cambiar contrase�a

	        </div>        

        <div style="padding: 0 10px">


					%errors%


         <form action="%www%/identity/password_change" id="change-password" method="post">

            <input type="hidden" name="fromClient" value="false" />

            <div class="field field-currentpassword">

              <label for="current-password">Contrase�a actual</label>

              <input type="password" id="current-password" size="35" name="currentPassword" value="" class="password-field" maxlength="32"/>

              <p class="help"></p>

            </div>



            <div class="form-box">

            <div class="field field-password">

              <label for="password">Nueva Contrase�a</label>

              <input type="password" id="password" size="35" name="newPassword" value="" class="password-field" maxlength="32"/>

            </div>



            <div class="field field-password2">

              <label for="password2">Nueva Contrase�a (otra vez)</label>

              <input type="password" id="password2" size="35" name="retypedNewPassword" value="" class="password-field" maxlength="32"/>

              <p class="help">Elige una contrase�a que tenga al menos 6 caracteres y que incluya tanto letras como otros caracteres</p>

            </div>

            </div>



            <div id="register-fieldset-captcha" class="field field-captcha">

            <div id="captcha-container">

            <label>Teclea el c�digo de la imagen.</label>

                %recaptcha_html%

                <div id="recaptcha_image" class="register-label"></div>

            </div>

            </div>
            
            <div class="js" style="overflow: hidden">

                <a href="#" class="new-button password-button" id="next-btn" onClick="$(this).up('form').submit(); return false;"><b>Cambiar</b><i></i></a>

                <input type="submit" id="next" value="Verander" style="display: none;" />

            </div>


         </form>

        </div>

    </div>

    <div class="settings-container-bottom"></div>
