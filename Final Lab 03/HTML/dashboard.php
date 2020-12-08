<?php
	$username="root";
	$servername="localhost";
	$password="";
	$db_name="user1";
	
	$conn = mysqli_connect($servername,$usename,$password,$db_name);
	
	if(!$conn){
		die("Connection Failed: " . mysqli_connect_error());
	}
	
	$query = "SELECT * FROM user1";
	$results = mysqli_query($conn,$query);
	
	if(mysqli_num_rows($results)>0){
		echo "<table border = '1' style = 'border-collapse:collapse;'>";
		echo "<tr>";
		echo "<th> Name</td>";
		echo "<th> Username</td>";
		echo "<th> Email</td>";
		echo "<th> Phone</td>";
		echo "</tr>";
		
		while($row = mysqli_fetch_assoc($results)){
			echo "<tr>";
				echo "<td>".$row["Name"]."</td>";
				echo "<td>".$row["Username"]."</td>";
				echo "<td>".$row["Email"]."</td>";
				echo "<td>".$row["Phone"]."</td>";
			echo "</tr>";
		}
		
		echo "</table>";
	}
?>