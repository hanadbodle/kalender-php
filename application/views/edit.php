<!DOCTYPE html>
<html>
<head>

    <title>Add Character</title>
<link rel="stylesheet" href="<?php echo base_url('include/editnames.css')?>"?>  
</head>
<body>



<div id="flexcontainer">
    <h1 class=>Welkom </h1>

    <center class="center">Update User</center>

    <center>
    <?php echo form_open('Birthday/updateuser'); ?>

            <?php var_dump($person); ?>
        <table>
        <td><input type="text" name="eid" required="" style="display:none" value="<?php echo $person->id; ?>"  ></td>
        <tr>
        <td>FirstName :</td>


        <td><input type="text" name="person" required="" value="<?php echo $person->person; ?>"  ></td>

        </tr>
        <tr>
        <td>Day :</td>
        <td><input type="text" name="day" required="" value="<?php echo $person->day; ?>" ></td>
        </tr>
        <tr>
        <td>Month :</td>
        <td><input type="text" name="month" required="" value="<?php echo $person->month; ?>"></td>
        </tr> 
        
        </td>
        </tr>
        <tr>
        <td>Year :</td>
        <td><input type="text" name="year" required="" value="<?php echo $person->year; ?>" ></td>
        </tr>
        </table>
        <input type="submit"  class="add" name="edit" value="Edit">
    </center>

</div>
</body>
</html>