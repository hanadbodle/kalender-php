<link rel="stylesheet" href="<?php echo base_url('include/editnames.css')?>"?> 
 
<ul>
<div class="flexcontainer">
<?php

$month = array("januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december");
foreach($birthdays as $_key => $_value) {?>

 <h2><ul><?=$month[$_value->month -1]?></ul></h2>
 <h1><ul><?=$_value->day?></ul></h1>
 <a><?=$_value->person?></a>
 

 <?php }  ?>
</div>

</ul>
<style type="text/css">


	body {
    margin: 0 auto;
    width: 50%;
}

/*
    Set common typography.
    
    The preferred font is Open Sans, which is a Google Web Font, so it should be available everywhere. If it isn't, Verdana is the backup font, but only for body text, because it doesn't look good in headers.
*/

body {
  font-family: Open Sans, Verdana, sans-serif;
  font-size: 12pt;
}

h1 {
  font-family: Open Sans Condensed, sans-serif;
  font-weight: normal;
  font-size: 24pt;
  color: #666;
}

h2 {
  font-family: Open Sans Condensed, sans-serif;
  font-weight: normal;
  font-size: 35px;
  color: #069;
  margin-bottom: 0;
}

/*
    Position the month names, day numbers, and person names.
    
    The day numbers are on the left with a list of person names to the right of them.
*/

h1 {
    margin: 0;
    border-bottom: 1px dotted grey;
}

h2 {
    margin: 0;
}

h2 ~ p {    /* only applies to p-elements on the main page */
    margin: 0;
    position: relative;
    top: -40px;     /* move person names to line up with the day number */
    left: 50px;     /* make sure the person names don't overlap the day number */
}

p:last-of-type {    /* the last p-element should act like a normal paragraph since it's not a person name */
    position: static;
}

/*
    Set hyperlink styles.
*/

a {
    color: black;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

a + a {     /* delete links */
    color: red;
    font-size: 80%;
    vertical-align: super;
}

p:last-of-type a {  /* the add link */
    color: blue;
    
    display: block;     /* we can't center the parent element, because no all pages need their last paragraph centered */
    text-align: center;
    margin-bottom: 20px;
}

/*
    Set the style of forms.
    
    Labels are in a column to the left, with input fields to the right and spanning the entire remaining width.
*/

form p {
    margin: 5px 0;
} 

form label {
    display: inline-block;
    width: 100px;
}

form input[type=submit]:only-child {
    margin-left: 100px;     /* place submit button underneath fields */
}









</style>