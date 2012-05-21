
<!--
                                        ##################################
                                        ## Codigo por lZer0. para KM.   ##
                                        ##  los mejores usuarios Top    ##
                                        ## Gracias por usar este Add-on ##
                                        ##################################
-->

<div class="habblet-container ">		
<div class="cbb clearfix red ">
<div class="box-tabs-container clearfix">



<h2>Usuarios Top</h2>

<ul class="box-tabs">
        <li id="tab-1-3-1"><a href="#">Top Diamantes</a><span class="tab-spacer"></span></li>
        <li id="tab-1-3-2"><a href="#">Top Pixeles</a><span class="tab-spacer"></span></li>
        <li id="tab-1-3-3" class="selected"><a href="#" >Top Créditos</a><span class="tab-spacer"></span></li>
        </ul>

</div>

  
<div id="tab-1-3-1-content"  style="display: none">
<div id="staffpicks-rooms-habblet-list-container" class="habblet-list-container groups-list">


<ul class="habblet-list two-cols">


<?php

$getsql = mysql_query("SELECT * FROM users ORDER BY diamantes DESC LIMIT 5");
while($getnew = mysql_fetch_assoc($getsql)){

?>

<br>
<center><img src="http://www.habbo.com.es/habbo-imaging/avatarimage?figure=<?php echo $getnew['look']; ?>direction=3&amp;head_direction=3&amp;gesture=sml&amp;action=&amp;size=l align="center"></center>


<center><b>nombre:</b>
<a href="/home/<?php echo $getnew['username']; ?>">
<b><?php echo $getnew['username']; ?></b></a>

<br>
<b>Diamantes:</b><br><?php echo $getnew['diamantes']; ?>


	  <?php } ?><center>

    </ul>



</div>

</div>
    




<div id="tab-1-3-2-content"  style="display: none">
<div id="staffpicks-rooms-habblet-list-container" class="habblet-list-container groups-list">


<ul class="habblet-list two-cols">


<?php

$getcontents = mysql_query("SELECT * FROM users ORDER BY activity_points DESC LIMIT 5");
while($mysql = mysql_fetch_assoc($getcontents)){

?>

<br>
<center><img src="http://www.habbo.com.es/habbo-imaging/avatarimage?figure=<?php echo $mysql['look']; ?>direction=3&amp;head_direction=3&amp;gesture=sml&amp;action=&amp;size=l align="center"></center>


<center><b>nombre:</b>
<a href="/home/<?php echo $mysql['username']; ?>">
<b><?php echo $mysql['username']; ?></b></a>

<br>
<b>Pixeles:</b><br><?php echo $mysql['activity_points']; ?>


	  <?php } ?><center>

    </ul>







</div>

</div>
    

<div id="tab-1-3-3-content" >
<div id="staffpicks-groups-habblet-list-container" class="habblet-list-container groups-list">

    <ul class="habblet-list two-cols">


<?php

$row = mysql_query("SELECT * FROM users ORDER BY credits DESC LIMIT 5");
while($sql = mysql_fetch_assoc($row)){

?>

<br>
<center><img src="http://www.habbo.com.es/habbo-imaging/avatarimage?figure=<?php echo $sql['look']; ?>direction=3&amp;head_direction=3&amp;gesture=sml&amp;action=&amp;size=l align="center"></center>


<center><b>nombre:</b>
<a href="/home/<?php echo $sql['username']; ?>">
<b><?php echo $sql['username']; ?></b></a>

<br>
<b>Créditos:</b><br><?php echo $sql['credits']; ?>


	  <?php } ?><center>

    </ul>
</div>
    </div>
  
    
                        
                    
                </div> </div>
                <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>