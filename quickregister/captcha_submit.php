<?php
require_once("../includes/config1.php");

$page['id']="0";
$page['sub_id']="0";
$page['name']="register_captcha_submit";
$page['redirect']="0";
require_once("../includes/core.php");
if(isset($_SESSION['step'])){
if($_SESSION['step']==2){
header("location: ../email_password");
exit;
}
if($_SESSION['step']==1){
header("location: ../age_gate");
exit;
}
}else{
$_SESSION['step']=1;
header("location: ../age_gate/e/05x");
exit;
}

if(isset($_SESSION['captcha'])){
if(isset($_POST['captchaResponse'])){
if($_SESSION['captcha']==$_POST['captchaResponse']){
$explode = explode('@',$_SESSION['bean_email']);
$bean_username = mysql_real_escape_string($explode[0].rand(1000,9999));
$bean_email = mysql_real_escape_string($_SESSION['bean_email']);
$bean_password = md5($_SESSION['bean_password']);
$bean_figure = mysql_real_escape_string($_POST['bean_figure']);
mysql_query("INSERT INTO `users` (`username`, `password`, `mail`, `rank`, `credits`, `pixels`, `look`, `gender`, `isonline`, `ip`, `lastaccess`, `default`) VALUES ('".$bean_username."', '".$bean_password."', '".$bean_email."', '1', '".get_settings("initial_credits")."', '".get_settings("initial_pixels")."', '".$bean_figure."', '".$_SESSION['bean_gender']."', '0', '".$_SERVER['REMOTE_ADDR']."', '0', '1');") or die (mysql_error());

if ($lang_ui=="PT") {
require_once("../includes/mailler/class.phpmailer.php");
$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "$smtp_host";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "$smtp_username";  // SMTP username
$mail->Password = "$smtp_password"; // SMTP password

$mail->From = "$smtp_email";
$mail->FromName = "$HotelName";
$mail->AddAddress("$bean_email", "$bean_username");

$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Bem Vindo ao $HotelName!";
$mail->Body    = "<table width='98%' border='0' cellspacing='0' cellpadding='0'>
    <tbody><tr>
        <td align=center>

            <table border='0' cellpadding='0' cellspacing='0' width='595'>
                <tbody><tr>
                    <td align=left style='border-bottom:1px solid #aaaaaa' height='70' valign='middle'>
                        <table border='0' cellpadding='0' cellspacing='0'>
                            <tbody><tr>
                                <td>
                                    <img src='http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/$habboweb/web-gallery/v2/images/habbologo_whiteR.gif' alt='Habbo'>
                                </td>
                            </tr>

                        </tbody></table>
                    </td>
                </tr>


<tr>
    <td align='left' style='border-bottom:1px dashed #aaaaaa' valign='middle'>
        <table style='margin-left:12px;margin-right:12px;padding:0 0 10px 0;width:100%' border='0' cellpadding='0' cellspacing='0'>
            <tbody><tr>
                <td valign='top'>
                                    <p style='font-family:Verdana,Arial,sans-serif;font-size:20px;padding-top:15px'>
                                        Olá, $bean_email
                                    </p>
                                    <p style='font-family:Verdana,Arial,sans-serif;font-size:12px;padding-bottom:5px'>
                                       Bem Vindo ao Hotel! <a href='$hotelurl' target='_blank'>Clique aqui para Entrar no Hotel</a>.
                                    </p>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
    <td align='left' style='border-bottom:1px solid #aaaaaa' height='100' valign='middle'>
        <table style='margin-left:12px' border='0' cellpadding='0' cellspacing='0'>
            <tbody><tr>
                <td valign='middle'>
                    <table style='background-color:#51b708;height:50px' height='50px;' cellpadding='0' cellspacing='0'>
                        <tbody><tr>
                            <td style='height:100%;vertical-align:middle;border:solid 2px #000000' valign='middle'>
                                <p style='font-family:Verdana,Arial,sans-serif;font-weight:bold;font-size:18px;color:#ffffff;margin-bottom:0'>
                                                <a style='text-decoration:none;padding:15px 20px;color:#ffffff' href='$hotelurl' target='_blank'>
                                                   Esperamos que tenha um Bom Jogo!
                                                </a>
</p>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
    <td valign=top align=center>
        <table style='font-family:Verdana,Arial,sans-serif;text-align:justify;font-size:11px;color:#aaaaaa;padding-top:10px;padding-right:10px;padding-left:10px;padding-bottom:10px;margin-right:0pt;margin-left:0pt;margin-bottom:0pt' border='0' cellpadding='0' cellspacing='0' width='595'>
            <tbody><tr>
                <td height='8'></td>
            </tr>
            <tr>
                <td valign=top>
                                </td>
            </tr>
        </tbody></table>
    </td>
</tr>
</tbody></table>

</td>
</tr>
</tbody></table>";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
}

if ($lang_ui=="EN") {
require_once("../includes/mailler/class.phpmailer.php");
$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "$smtp_host";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "$smtp_username";  // SMTP username
$mail->Password = "$smtp_password"; // SMTP password

$mail->From = "$smtp_email";
$mail->FromName = "$HotelName";
$mail->AddAddress("$bean_email", "$bean_username");

$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Welcome to the $HotelName!";
$mail->Body    = "<table width='98%' border='0' cellspacing='0' cellpadding='0'>
    <tbody><tr>
        <td align=center>

            <table border='0' cellpadding='0' cellspacing='0' width='595'>
                <tbody><tr>
                    <td align=left style='border-bottom:1px solid #aaaaaa' height='70' valign='middle'>
                        <table border='0' cellpadding='0' cellspacing='0'>
                            <tbody><tr>
                                <td>
                                    <img src='http://cotendo.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/$habboweb/web-gallery/v2/images/habbologo_whiteR.gif' alt='Habbo'>
                                </td>
                            </tr>

                        </tbody></table>
                    </td>
                </tr>


<tr>
    <td align='left' style='border-bottom:1px dashed #aaaaaa' valign='middle'>
        <table style='margin-left:12px;margin-right:12px;padding:0 0 10px 0;width:100%' border='0' cellpadding='0' cellspacing='0'>
            <tbody><tr>
                <td valign='top'>
                                    <p style='font-family:Verdana,Arial,sans-serif;font-size:20px;padding-top:15px'>
                                        Hi, $bean_email
                                    </p>
                                    <p style='font-family:Verdana,Arial,sans-serif;font-size:12px;padding-bottom:5px'>
                                       Bem Vindo ao Hotel! <a href='$hotelurl' target='_blank'>Click Here to Enter in Hotel</a>.
                                    </p>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
    <td align='left' style='border-bottom:1px solid #aaaaaa' height='100' valign='middle'>
        <table style='margin-left:12px' border='0' cellpadding='0' cellspacing='0'>
            <tbody><tr>
                <td valign='middle'>
                    <table style='background-color:#51b708;height:50px' height='50px;' cellpadding='0' cellspacing='0'>
                        <tbody><tr>
                            <td style='height:100%;vertical-align:middle;border:solid 2px #000000' valign='middle'>
                                <p style='font-family:Verdana,Arial,sans-serif;font-weight:bold;font-size:18px;color:#ffffff;margin-bottom:0'>
                                                <a style='text-decoration:none;padding:15px 20px;color:#ffffff' href'$hotelurl' target='_blank'>
                                                   We Gotta to you get a Funny Game
                                                </a>
</p>
</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
</td>
</tr>
<tr>
    <td valign=top align=center>
        <table style='font-family:Verdana,Arial,sans-serif;text-align:justify;font-size:11px;color:#aaaaaa;padding-top:10px;padding-right:10px;padding-left:10px;padding-bottom:10px;margin-right:0pt;margin-left:0pt;margin-bottom:0pt' border='0' cellpadding='0' cellspacing='0' width='595'>
            <tbody><tr>
                <td height='8'></td>
            </tr>
            <tr>
                <td valign=top>
                                </td>
            </tr>
        </tbody></table>
    </td>
</tr>
</tbody></table>

</td>
</tr>
</tbody></table>";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
}

$get_id = mysql_query("SELECT id FROM `users` WHERE `username` = '".$bean_username."';");
$get_id_result = mysql_fetch_array($get_id);
$_SESSION['id'] = $get_id_result['id'];
$_SESSION['step'] = 0;
header("location: ../me");
exit;
}else{
header("location: captcha/e/12x");
exit;
}
}else{
header("location: captcha/e/12x");
exit;
}
}else{
header("location: captcha/e/12x");
exit;
}

?>
