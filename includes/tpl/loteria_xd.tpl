<?php




$query = @mysql_query('SELECT * FROM credit_vouchers ');
if($existe = @mysql_fetch_object($query))
{

echo'';
}else{
	echo '<br />No hay Códigos Vouchers disponibles,';	
}
?>



<?php
$hoteles = @mysql_query("SELECT * FROM credit_vouchers order by rand() LIMIT 1");
while($hotel=@mysql_fetch_array($hoteles)){
?>
Usa Este Codigo Voucher
 <?php echo $hotel['code']; ?>

<?php
}
?>