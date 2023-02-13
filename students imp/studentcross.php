<?php 

include "config.php";

$selection_id = $_POST['ids'];

if($selection_id == 1){header ("Location: studentinsert.php");}
if($selection_id == 2){header ("Location: studentdelete.php");}
if($selection_id == 3){header ("Location: studentprint.php");}
if($selection_id == 4){header ("Location: studentsearch.php");}
if($selection_id == 5){header ("Location: studentmentorsearch.php");}

?>