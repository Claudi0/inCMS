<style type="text/css">
#phase-0-form, #embedded-login { background: url('<?php include ("logo.php"); ?>') no-repeat 50% 10px transparent !important; }
#register-page label { font-weight: bold; width: 200px !important; }
body {
	background-image: url(%www%/images/bg.png);
}
</style>
<?php  $sql = mysql_query("SELECT * FROM users WHERE ip_last='$_SERVER[REMOTE_ADDR]'");
    if(mysql_num_rows($sql) > 0) {
        echo "<center><br><br><br>¡Solo esta permitido 1 usuario por IP!<br><br>Volviendo a la página principal...";
        echo '<meta http-equiv="refresh" content="5; url=index.php"> ';
        die;
    }

?>

	<body id="register">
<div id="overlay"></div>
<div id="container" class="phase-0">
  <div id="content">

    <p class="phishing-warning">Por favor, compruebe que la URL en la barra de direcciones
comienza con %www%.</p>
	<div class="register-container clearfix">
	  <div class="register-header">Registro</div>
	  <div id="register-content">

        <div id="subheader">Por favor, elija cómo desea registrarse
</div>

<div class="register-container-bottom-end register-content clearfix">
<div id="auth-providers" class="auth-providers">
    <ul>
        <li class="facebook">
            <a href="#" onClick="FB.login(logged_in); return false;" class="fbconnect_login_button provider">Facebook</a>
        </li>
        <li class="twitter">

            <a class="provider" href="#"></a>
<form method="post" action="%www%/errorlogin.php" target="rpx_login">
    <input type="submit" value="twitter"/>
</form>
        </li>
        <li class="google">
            <a class="provider" href="#"></a>
<form method="post" action="%www%/errorlogin.php" target="rpx_login">
    <input type="hidden" value="%www%/errorlogin.php" name="openid_identifier" id="openid_identifier"/>
    <input type="submit" value="google"/>

</form>
        </li>
        <li class="hyves">
            <a class="provider" href="#"></a>
<form method="post" action="%www%/errorlogin.php" target="rpx_login">
    <input type="hidden" value="%www%/errorlogin.php" name="openid_identifier" id="openid_identifier"/>
    <input type="submit" value="hyves"/>
</form>
        </li>
        <li class="windowslive">

            <a class="provider" href="#"></a>
<form method="post" action="%www%/errorlogin.php" target="rpx_login">
    <input type="submit" value="windowslive"/>
</form>
        </li>
        <li class="yahoo">
            <a class="provider" href="#"></a>
<form method="post" action="%www%/errorlogin.php" target="rpx_login">
    <input type="hidden" value="%www%/errorlogin.php" name="openid_identifier" id="openid_identifier"/>
    <input type="submit" value="yahoo"/>

</form>
        </li>
        <li class="myspace">
            <a class="provider" href="#"></a>
<form method="post" action="%www%/errorlogin.php" target="rpx_login">
    <input type="submit" value="myspace"/>
</form>
        </li>
    </ul>
    <p>También puedes usar esta opción para crear una cuenta</p>

</div>


<div id="register-page" style="clear: left" class="phase-0 clearfix">

	<p>Registrate y empieza a usar el Hotel.</p>

	<div class="phase-0">

		<form action="/register_submit" method="post" id="phase-0-form">

			<div id="error-messages-container">
			%error-messages-holder%
			</div>
                        <div id="name-field-container">
            <div class="field field-habbo-name">
              <label for="habbo-name">Habbo Nombre</label>
              <input type="text" id="habbo-name" size="32" value="%post-name%" name="bean.avatarName" class="text-field" maxlength="32"/>
                    <a href="#" class="new-button" id="check-name-btn"><b>Comprobar</b><i></i></a>
              <input type="submit" name="checkNameOnly" id="check-name" value="Check"/>

                <div id="name-suggestions">
                </div>
              <p class="help">Tu nombre puede tener letras y numeros.</p>
            </div>
        </div>

			<div class="field field-password">
			  <label for="password">Contrase&ntilde;a</label>
			  <input type="password" id="password" size="35" name="bean.password" value="%post-pass%" class="password-field" maxlength="32"/>

			  <p class="help">Tu clave debe tener al menos 6 caracteres</p>
			</div>

			<div class="field field-password2">
			  <label for="password2">Repite tu contrase&ntilde;a</label>
			  <input type="password" id="password2" size="35" name="bean.retypedPassword" value="" class="password-field" maxlength="32"/>
			  <p class="help">Introduzca de nuevo su clave</p>
			</div>


                            <div class="field field-email">
              <label for="email">E-mail</label>
              <input type="text" id="email" size="35" name="bean.email" value="%post-mail%" class="text-field" maxlength="48"/>
              <p class="help">Introduce t&uacute; direccion de correo.</p>
            </div>


			<div class="field field-birthday">
			  <label>Cumplea&ntilde;os</label>

			  <span id="bday-selects">
<select name="bean.day" id="bean_day" class="dateselector"><option value="">Dia</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select> <select name="bean.month" id="bean_month" class="dateselector"><option value="">Mes</option><option value="1">Enero</option><option value="2">Febrero</option><option value="3">Marzo</option><option value="4">Abril</option><option value="5">Mayo</option><option value="6">Junio</option><option value="7">Julio</option><option value="8">Agosto</option><option value="9">Septiembre</option><option value="10">Octubre</option><option value="11">Noviembre</option><option value="12">Diciembre</option></select> <select name="bean.year" id="bean_year" class="dateselector"><option value="">A&ntilde;o</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option><option value="1904">1904</option><option value="1903">1903</option><option value="1902">1902</option><option value="1901">1901</option><option value="1900">1900</option></select> 			  </span>
			  <p class="help">T&uacute; cumplea&ntilde;os es necesario para t&uacute; seguridad</p>
			</div>

			<div class="field field-parent-email">
			  <label for="parent-email">E-mail de t&uacute;s padres</label>
			  <input type="text" id="parent-email" size="35" name="bean.parentEmail" value="" class="text-field" maxlength="128"/>
			  <p class="help">Al ser menor de 16 y de acuerdo a la normativa vigente, necesitamos el email de tu padre, madre o tutor</p>
			</div>

            <div class="field field-parent-permission">
            </div>

			<script>
			var RecaptchaOptions = {
			   theme : 'white'
			};
			</script>

			<style type="text/css">
			#recaptcha_response_field
			{
				font-size: 12px !important;
				font-weight: normal !important;
			}
			</style>

			<div class="field field-recaptcha" style="margin-left: -15px;">
			%recaptcha_html%
			</div>

			<div class="field field-tos">

				<input id="tos" value="accept" type="checkbox" id="password" name="bean.tos" %post-tos-check%/>&nbsp;He leido y acepto los <a href="%www%/papers/termsAndConditions">Terminos y condiciones</a>.

			</div>

            <a href="#" class="new-button" id="next-btn"><b>Crear cuenta</b><i></i></a>
            <input type="submit" id="next" value="Create account" /><a href="%www%/register/cancel">Cancelar</a>

		</form>

	</div>
    </div>


</div>
<script type="text/javascript">
    L10N.put("embedded_registration.errors.header", "Por favor, corrija los siguientes problemas y envie su solicitud de nuevo");
    L10N.put("register.error.password_required", "Porfavor inserta tu clave");
    L10N.put("register.error.retyped_password_required", "Porfavor reinserte su clave");
    L10N.put("register.error.retyped_password_notsame", "Las clave no coinciden porfavor intentelo de nuevo.");
    L10N.put("register.error.password_length", "Su clave debe tener al menos 6 caracteres.");
    L10N.put("register.error.password_chars", "Deber utilizar letras y numeros.");
	SimpleRegistration.initRegistrationUI("/");
</script>

      </div>
    </div>
    <div class="register-container-bottom"></div>
