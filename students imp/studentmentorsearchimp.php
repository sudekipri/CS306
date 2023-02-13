<!DOCTYPE html>
<html>
<head>
	<title></title>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</head>
<body>

<div align="center">

	<table>

<tr> <th> Student ID </th> <th> Name of the Student </th> <th> Name of the Mentor </th> <th> Employee ID </th> </tr> 


<?php

include "config.php";

$student_id2 = $_POST['student_id'];

$sql_statement = "SELECT S.student_id, S.student_name, E.emp_name, E.work_id  FROM students S, employees E, tutors T WHERE S.student_id = '$student_id2' AND S.student_id = T.student_id AND T.work_id = E.work_id";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $student_id = $row['student_id'];
  $student_name = $row['student_name'];
	$emp_name = $row['emp_name'];
	$work_id = $row['work_id'];

	echo "<tr>" . "<th>" . $student_id . "</th>" . "<th>" . $student_name . "</th>" .  "<th>" . $emp_name . "</th>" .  "<th>" . $work_id . "</th>" . "</tr>";
}

?>

</table>
<form
	action="index.php" method="POST">
	<input type="submit" value="Go to Main Menu">
</form>
</div>

</body>
</html>