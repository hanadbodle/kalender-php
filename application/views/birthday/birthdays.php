<ul>
<?php
$month = array("januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december");
foreach($birthdays as $_key => $_value) {?>

 <h1><ul><?=$month[$_value->month -1]?></ul></h1>
 <h2><ul><?=$_value->day?></ul></h2>
 <?=$_value->person?>
 

 <?php }  ?>


</ul>
