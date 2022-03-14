<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM ticket_booking" )
		or die("Can not execute query");
	echo "<table border> \n";
	echo "<th>Name</th> <th>Appt_date</th> <th>From</th> <th>To</th> <th>Status</th>\n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $name </td>";
		echo "<td> $appt_date </td>";
		echo "<td> $from_location </td>";
		echo "<td> $to_location</td>";
		echo "<td> $STATUS </td>";
		echo "</tr> \n";
	}
	echo "</table> \n";
	echo "<p><a href=appt_input.php>Add Booking</a>";

	echo "<p><a href=cancle_input.php?id=$id>Cancle Booking</a>";
?>