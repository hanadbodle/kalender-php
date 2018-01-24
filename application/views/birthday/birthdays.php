
 
<ul>
<div class="flexcontainer">
<?php

$month = array("januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december");
foreach($birthdays as $_key => $_value) {?>

 <h2><ul><?=$month[$_value->month -1]?></ul></h2>
 <h1><ul><?=$_value->day?></ul></h1>
 <a><?=$_value->person?></a>
 <td>
<a href="" class="btn btn-primary">Edit</a>
 </td>

 <?php }  ?>
</div>

</ul>
