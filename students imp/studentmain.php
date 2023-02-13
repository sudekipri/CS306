<?php
include "config.php";

?>

Select option: <br>

<form action="studentcross.php" method="POST">
<select name="ids">

<option value=1>".Insert."</option>
<option value=2>".Delete."</option>
<option value=3>".Print."</option>
<option value=4>".Search by ID."</option>
<option value=5>".Search Mentor."</option>
</select>

<button>GO</button>
</form>