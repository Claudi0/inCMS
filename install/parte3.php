<?php
	$arq = fopen("../includes/config1.php", "a+");
	$nome  = str_pad($_POST['host'],  0, ' ', STR_PAD_RIGHT);
	fwrite($arq, '<?php $MyHost = "'.$nome.'"; // Host Do Hotel  ?>');
	fclose($arq);

	$arq2 = fopen("../includes/config1.php", "a+");
	$nome2  = str_pad($_POST['user'],  0, ' ', STR_PAD_RIGHT);
	fwrite($arq2, '<?php $MyUser = "'.$nome2.'"; // Username do PMA  ?>');
    fclose($arq2);

	$arq3 = fopen("../includes/config1.php", "a+");
	$nome3  = str_pad($_POST['pass'],  0, ' ', STR_PAD_RIGHT);
	fwrite($arq3, '<?php $MyPass = "'.$nome3.'"; // Senha do PMA  ?>');
	fclose($arq3);
	
	$arq4 = fopen("../includes/config1.php", "a+");
	$nome4  = str_pad($_POST['dbname'],  0, ' ', STR_PAD_RIGHT);
	fwrite($arq4, '<?php $MyDB = "'.$nome4.'"; // DB do Hotel  ?>');
	fclose($arq4);
	
?>
<html>
<head>
<meta http-equiv="REFRESH" content="0;url=./finish.php">
</head>
</html>
