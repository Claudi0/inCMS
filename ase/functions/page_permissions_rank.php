<?php
define('USERNAME_REQUIRED', TRUE);
define('ACCOUNT_REQUIRED', TRUE);
include('../../SYSTEM/CP.Global.php');
$username = $core->EscapeString($_SESSION['username']);
if(!$users->UserPermission('hk_permissions', $username))
{
header("Location: ../nopermission.php");
die;
}
$permissionq = mysql_query("SELECT * FROM permissions_ranks WHERE rank='".$core->EscapeString($_GET['rank'])."' LIMIT 1");
$columns = mysql_num_fields($permissionq);
$permission = mysql_fetch_array($permissionq);
?>
<script type="text/javascript" src="../Public/tiny_mce/jquery.tinymce.js"></script>
<script language="javascript">
    $('.tooltip').tooltip({ 
        track: true, 
        delay: 0, 
        showURL: false, 
        showBody: " - ", 
        fade: 250 
    });
    
    $('.exitbutton').click(function() { 
        $('.page').css('display', 'none');
        $('.overlay').css('display', 'none');
    });
    
    function LoadPage(PageName, Data) {
            $('.page').css('display', 'none');
            $('.overlay').css('display', 'none');
            $.ajax({
               type: "POST",
               url: PageName + ".php",
               data: Data,
               success: function(msg){
                 $('.conColumn').html(msg);
                 $('li#' + OldPage).removeClass('selected');
                 $('li#' + PageName).addClass('selected');
                 OldPage = PageName;
               }
             });
        }

    function SubmitForm() {
        $('button.UpdateUser').attr('disabled', 'disabled');
        $.ajax({
           type: "POST",
           url: "functions/update_permissions.php",
         data: "type=rank" 
         <?php for($i = 0; $i < $columns; $i++) { ?>+ "&<?php echo mysql_field_name($permissionq,$i);?>=" +$('#<?php echo mysql_field_name($permissionq,$i);?>').val()<?php } ?>,
            success: function(){
            $('button#General').html('Posted!');
            LoadPage('permissions');
            $('.page').css('display', 'none');
            $('.overlay').css('display', 'none');
           }
         });
    }
</script>

    <h1>Edit Rank Permission: <?php echo $core->EscapeString($_GET['rank']); ?></h1>
    <input type="text" name="rank" id="rank" value="<?php echo $_GET['rank']; ?>" style="visibility:hidden;" />
    
    <div>
    <?php
	for($i = 0; $i < $columns; $i++) { 
    if(mysql_field_name($permissionq,$i)<>"rank"){
    ?>
    <div class="SelectRow" style="width:200px; padding-top:2px; padding-bottom:2px;">
    
    <label for="<?php echo mysql_field_name($permissionq,$i);?>"><?php echo mysql_field_name($permissionq,$i);?>: </label><select type="text" name="<?php echo mysql_field_name($permissionq,$i);?>" id="<?php echo mysql_field_name($permissionq,$i);?>" style="width:40px;float:right;"><option value="0" <?php if($permission[mysql_field_name($permissionq,$i)]=="0") echo 'selected'; ?>>0</option><option value="1" <?php if($permission[mysql_field_name($permissionq,$i)]=="1") echo 'selected'; ?>>1</option></select>        
        </div><?php }} ?>
    </div>
    <button onclick="SubmitForm()" class="UpdateUser">Update</button>