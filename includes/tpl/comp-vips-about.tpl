<style type="text/css">
<!--
.buttonv4 {BORDER-RIGHT: #CCCCCC 1px solid; BORDER-TOP: #CCCCCC 1px solid; width:70px; FONT-WEIGHT: normal; FONT-SIZE: 10px; BORDER-LEFT: #CCCCCC 1px solid; CURSOR: pointer; COLOR: #000000; BORDER-BOTTOM: #CCCCCC 1px solid; FONT-FAMILY: Verdana; BACKGROUND-COLOR: #f5f5f5; border-radius: 1px; moz-border-radius: 1px; height:20px;
}
.buttonv41 {BORDER-RIGHT: #CCCCCC 1px solid; BORDER-TOP: #CCCCCC 1px solid; width:70px; FONT-WEIGHT: normal; FONT-SIZE: 10px; BORDER-LEFT: #CCCCCC 1px solid; CURSOR: pointer; COLOR: #000000; BORDER-BOTTOM: #CCCCCC 1px solid; FONT-FAMILY: Verdana; BACKGROUND-COLOR: #f5f5f5; border-radius: 1px; moz-border-radius: 1px; height:20px;
}
.buttonv411 {BORDER-RIGHT: #CCCCCC 1px solid; BORDER-TOP: #CCCCCC 1px solid; width:70px; FONT-WEIGHT: normal; FONT-SIZE: 10px; BORDER-LEFT: #CCCCCC 1px solid; CURSOR: pointer; COLOR: #000000; BORDER-BOTTOM: #CCCCCC 1px solid; FONT-FAMILY: Verdana; BACKGROUND-COLOR: #f5f5f5; border-radius: 1px; moz-border-radius: 1px; height:20px;
}
.buttonv4111 {BORDER-RIGHT: #CCCCCC 1px solid; BORDER-TOP: #CCCCCC 1px solid; width:70px; FONT-WEIGHT: normal; FONT-SIZE: 10px; BORDER-LEFT: #CCCCCC 1px solid; CURSOR: pointer; COLOR: #000000; BORDER-BOTTOM: #CCCCCC 1px solid; FONT-FAMILY: Verdana; BACKGROUND-COLOR: #f5f5f5; border-radius: 1px; moz-border-radius: 1px; height:20px;
}
.buttonv41111 {BORDER-RIGHT: #CCCCCC 1px solid; BORDER-TOP: #CCCCCC 1px solid; width:70px; FONT-WEIGHT: normal; FONT-SIZE: 10px; BORDER-LEFT: #CCCCCC 1px solid; CURSOR: pointer; COLOR: #000000; BORDER-BOTTOM: #CCCCCC 1px solid; FONT-FAMILY: Verdana; BACKGROUND-COLOR: #f5f5f5; border-radius: 1px; moz-border-radius: 1px; height:20px;
}
-->
</style>
	
<div class="habblet-container ">		
<div class="cbb clearfix red "> 

<h2 class="title">Comprar VIP Coins</h2>

<div class="box-content"><div class="smallprint">


   <div align="center"><a href="JavaScript:PopWindow()"></a>
     <p>
       <?php $query = mysql_query("SELECT * FROM users WHERE username ='".USER_NAME."'");
while ($data = mysql_fetch_array($query)){
$id = $data['id']; 
} ?>
       <script>
function cambiar(){
var valor = document.getElementById('select').value;
var valoractual = ('<?php echo $id ?>');
document.getElementById('value').value=''+valoractual+''+valor+'';
}

        </script>
     </p>
     <form name="pg_frm" method="post" action="http://www.paygol.com/micropayment/paynow_post" >
       SMS
              <input type="hidden" name="pg_serviceid" value="5678">
              <input type="hidden" name="pg_currency" value="EUR">
              <input type="hidden" name="pg_name" value="VIP Coins">
              <input type="hidden" name="pg_custom" value="<?php echo $id ?>">
              <!-- With Dropdown -->
              <select name="pg_price">
                <option value="1" selected>5 Monedas</option>
                <option value="2">10 Monedas</option>
                <option value="3">20 Monedas</option>
                <option value="4">30 Monedas</option>
                <option value="5">40 Monedas</option>
				<option value="6">50 Monedas</option>
				<option value="7">60 Monedas</option>
				<option value="8">70 Monedas</option>
				<option value="9">80 Monedas</option>
				<option value="12">90 Monedas</option>
				<option value="15">120 Monedas</option>
              </select>
                <input type="submit" name="pg_button2" class="buttonv4" border="0" alt="Realiza pagos con PayGol: la forma m&aacute;s f&aacute;cil!" title="Realiza pagos con PayGol: la forma m&aacute;s f&aacute;cil!" onClick="pg_reDirect(this.form)" value="Comprar" />
              <br>
              <input type="hidden" name="pg_return_url" value="http://iFurni.net/shops/Tienda?Exito">
              <input type="hidden" name="pg_cancel_url" value="http://iFurni.net/shops/Tienda">
     </form>
     <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
       <input type="hidden" name="cmd" value="_s-xclick">
       <input type="hidden" name="hosted_button_id" value="LUABM9LRKU78Q">
       <table>
         <tr>
           <td><input type="hidden" name="on0" value="Coins"></td>
         </tr>
         <tr>
           <td>Paypal
             <select name="os0">
                 <option value="5 Coins">5 Coins $1,00</option>
                 <option value="10 Coins">10 Coins $2,00</option>
                 <option value="20 Coins">20 Coins $3,00</option>
                 <option value="30 Coins">30 Coins $4,00</option>
                 <option value="40 Coins">40 Coins $5,00</option>
                 <option value="50 Coins">50 Coins $6,00</option>
                 <option value="60 Coins">60 Coins $7,00</option>
                 <option value="70 Coins">70 Coins $8,00</option>
                 <option value="90 Coins">90 Coins $9,00</option>
                 <option value="100 Coins">100 Coins $10,00</option>
             </select></td>
         </tr>
         <tr>
           <td><input type="hidden" name="on1" value="%habboname%">
             Habbo Nombre
             <input name="os1" type="text" value="%habboname%" maxlength="60"></td>
         </tr>
         <tr>
           <td><div align="center">
               <input name="submit" type="submit" class="buttonv41111" id="submit" value="Comprar" />
           </div></td>
         </tr>
       </table>
       <input type="hidden" name="currency_code" value="USD">
       <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
     </form>
   </div>
</div></div>
	
</div>
</div>
<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>