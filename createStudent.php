<?php

	$id = $_GET["id"];
	$dept = $_GET["dept"];
	$name = $_GET["name"];
	$nid = $_GET["nid"];
	$address = $_GET["address"];
	$birthday = $_GET["birthday"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO student VALUES ( '$id', '$dept','$nid', '$birthday','$address' )" )

		or die("Can not execute query");



	// echo "Record inserted:<br> f0 = $id <br> f1 = $dept";



	echo "<p><a href=readStudent.php>READ all records</a>";

?>