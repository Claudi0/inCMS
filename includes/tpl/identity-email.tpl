div class="settings-container clearfix">
        <h1>Ajustes de emails</h1>
            <a href="/me" id="back-link">&laquo; Volver al Hotel</a>
        <div style="padding: 10px 10px 0 10px">

            
            <p>Debes contar con al menos una direcci�n de e-mail activada siempre. Si quieres cambiarla, a�ade una nueva, act�vala y luego convi�rtela en tu email principal.</p>
            <h3>Direcci�n principal</h3>
            <div class="primary-email">lluuiizz_113@quetevalga.com</div>
            <h3>Direcci�n secundaria</h3>
                Si a�ades m�s direcciones a tu cuenta, puedes usarlas para conectarte y resetear tu cuenta en el caso de que pierdas tu direcci�n de e-mail principal
            <div class="form-box" style="margin-top: 10px">
                <form id="new-email-form" action="/identity/add_email" method="post">
                <div class="field">
                    <label for="newEmailAddress" style="width: auto">A�adir nuevo email</label>
                    <input type="text" id="newEmailAddress" name="email" value="" class="text-field" />
                    <input type="hidden" name="__app_key" value="FC940EAD94D2AB97CA57F745F5269AAD.resin-fe-3"/>
                    <input type="submit" value="A�adir direcci�n y enviar mail de activaci�n">
                </div>
                </form>
            </div>


        </div>