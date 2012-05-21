<div class="habblet-container minimail" id="mail">		
						<div class="cbb clearfix blue "> 
	
							<h2 class="title">Minimail						</h2> 
						<div id="minimail"> 
    <div class="minimail-contents"> 
	<?php include('minimail-tabcontent.tpl'); ?>
	</div> 
	<div id="message-compose-wait"></div> 
    <form style="display: none" id="message-compose"> 
        <div>Para</div> 
        <div id="message-recipients-container" class="input-text" style="width: 426px; margin-bottom: 1em"> 
        	<input type="text" value="" id="message-recipients" /> 
        	<div class="autocomplete" id="message-recipients-auto"> 
        		<div class="default" style="display: none;">Nome do teu amigo.</div> 
        		<ul class="feed" style="display: none;"></ul> 
        	</div> 
        </div> 
        <div>Asunto<br/> 
        <input type="text" style="margin: 5px 0" id="message-subject" class="message-text" maxlength="100" tabindex="2" /> 
        </div> 
        <div>Mensaje<br/> 
        <textarea style="margin: 5px 0" rows="5" cols="10" id="message-body" class="message-text" tabindex="3"></textarea> 
        </div> 
        <div class="new-buttons clearfix"> 
            <a href="#" class="new-button preview"><b>Ver previa.</b><i></i></a> 
            <a href="#" class="new-button send"><b>Enviar</b><i></i></a> 
        </div> 
    </form>	
</div> 
<script type="text/javascript"> 
	L10N.put("minimail.compose", "Escribir").put("minimail.cancel", "Cancelar")
		.put("bbcode.colors.red", "Rojo").put("bbcode.colors.orange", "Naranja")
    	.put("bbcode.colors.yellow", "Amarillo").put("bbcode.colors.green", "Verde")
    	.put("bbcode.colors.cyan", "Cyan").put("bbcode.colors.blue", "Azul")
    	.put("bbcode.colors.gray", "Gris").put("bbcode.colors.black", "Negro")
    	.put("minimail.empty_body.confirm", "O corpo da mensagem está vazio.")
    	.put("bbcode.colors.label", "Colores").put("linktool.find.label", " ")
    	.put("linktool.scope.habbos", "Xukys").put("linktool.scope.rooms", "Sala")
    	.put("linktool.scope.groups", "Grupo").put("minimail.report.title", "Reportar essa mensagem");
 
    L10N.put("date.pretty.just_now", "Agora");            
    L10N.put("date.pretty.one_minute_ago", "há un minuto");            
    L10N.put("date.pretty.minutes_ago", "{0} minutos aproximados");            
    L10N.put("date.pretty.one_hour_ago", "há 1 hora");            
    L10N.put("date.pretty.hours_ago", "há {0} horas");            
    L10N.put("date.pretty.yesterday", "ayer");            
    L10N.put("date.pretty.days_ago", "há {0} días");            
    L10N.put("date.pretty.one_week_ago", "há 1 semana");            
    L10N.put("date.pretty.weeks_ago", "há {0} semanas");            
	new MiniMail({ pageSize: 10, 
	   total: 0, 
	   friendCount: 3, 
	   maxRecipients: 50, 
	   messageMaxLength: 20, 
	   bodyMaxLength: 4096,
	   secondLevel: false});
</script>
	
						
							
					</div> 
				</div> 
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> 