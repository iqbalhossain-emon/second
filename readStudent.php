<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM student" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>dept</th> <th>batch</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $dept </td>";
		echo "<td> $id </td>";
		// echo "<td> <a href = 'delete.php?id=$id'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?id=$id&dept=$dept&name=$name&=$nid&birthdate=$birthdate&address=$address'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";
// 
	echo "<p><a href=student.php>CREATE a new record</a>";
?>