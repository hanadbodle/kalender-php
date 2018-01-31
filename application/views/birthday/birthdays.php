
 
<ul>
<div class="flexcontainer">
<?php

$month = array("januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december");
foreach($birthdays as $_key => $_value) {?>

 <h2><ul><?=$month[$_value->month -1]?></ul></h2>
 <h1><ul><?=$_value->day?></ul></h1>

 <a><?=$_value->person?></a>

 <td>
<td><a href="<?php echo site_url('Birthday/edit/?id=' . $_value->id); ?>" class="buttonkleur">Edit</a></td>
<a href="" class="delete">Delete</a>
 </td>

 



 <?php }  ?>
</div>

</ul>


 <p><a href="<?php echo site_url('Birthday/create');?>" id="namen">toevoegen</a></p>