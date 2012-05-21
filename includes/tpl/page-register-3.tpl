<body id="client" class="background-captcha"> 
<div id="overlay"></div> 
<img src="%www%/web-gallery/v2/images/page_loader.gif" style="position:absolute; margin: -1500px;" /> 


<div id="change-password-form" style="display: none;">

    <div id="change-password-form-container" class="clearfix">

        <div id="change-password-form-title" class="bottom-border">¿Contraseña olvidada?</div>

        <div id="change-password-form-content" style="display: none;">

            <form method="post" action="%www%/account/password/identityResetForm" id="forgotten-pw-form">

                <input type="hidden" name="page" value="%www%/quickregister/captcha?changePwd=true" />

                <span>Vul hier je e-mailadres in:</span>

                <div id="email" class="center bottom-border">

                    <input type="text" id="change-password-email-address" name="emailAddress" value="" class="email-address" maxlength="48"/>

                    <div id="change-password-error-container" class="error" style="display: none;">Por favor, introduce un e-mail</div>

                </div>

            </form>

            <div class="change-password-buttons">

                <a href="#" id="change-password-cancel-link">Atrás</a>

                <a href="#" id="change-password-submit-button" class="new-button"><b>Cerrar</b><i></i></a>

            </div>

        </div>

        <div id="change-password-email-sent-notice" style="display: none;">

            <div class="bottom-border">

                <span>Te hemos enviado un email a tu dirección de correo. El mensaje contiene el link que necesitas clicar para cambiar tu contraseña.</span>

                <div id="email-sent-container"></div>

            </div>

            <div class="change-password-buttons">

                <a href="#" id="change-password-change-link">Atrás</a>

                <a href="#" id="change-password-success-button" class="new-button"><b>Cerrar</b><i></i></a>

            </div>

        </div>

    </div>

    <div id="change-password-form-container-bottom"></div>

</div>



<script type="text/javascript">

HabboView.add( function() {

     ChangePassw</script> 
<p class="phishing-warning">Por favor, aseg&uacute;rate de que la URL en la barra de direcciones comienza por %www%/</p>

<div id="stepnumbers">



  <div class="stephabbo"></div>

</div>











<div id="main-container">

		%errors%


    <div id="bubble-container" class="cbb">

        <div id="bubble-content" class="rounded">

             <div id="bubble-title"><center><font size="8">Comprovar Segurança</font></center> </div>

<div id="captcha-image-container" style="height: 150px;">

							<form id="captcha-form" method="post" action="%www%/quickregister/captcha_submit" onsubmit="Overlay.show(null,'Cargando...');">
							
                %recaptcha_html%

            </div>    

        </div>

    </div>



    <div class="delimiter_smooth">

        <div class="flat">&nbsp;</div>

        <div class="arrow">&nbsp;</div>

        <div class="flat">&nbsp;</div>

    </div>



    <div id="inner-container">

       

    </div>



    <div id="select">

        <a href="%www%/quickregister/cancel" id="back-link">Voltar</a>

        <div class="button">

            <a id="proceed-button" href="#" class="area"><font size="10">Continuar</font></a>

            <span class="close"></span>

        </div>

   </div>



    <script type="text/javascript">



        document.observe("dom:loaded", function() {

          if($("proceed-button")) {

                $("proceed-button").observe("click", function(e) {

                    Event.stop(e);

                    Overlay.show(null,'Guardando Datos...');

                    $("captcha-form").submit();

                });



                Event.observe($("back-link"), "click", function() {

                    Overlay.show(null,'Cargando...');

                });                  

            }

            

            $("recaptcha_response_field").focus();

        });

    </script>




</div> 
 
<script type="text/javascript"> 
    HabboView.run();
</script> 
 
</body> 
</html>