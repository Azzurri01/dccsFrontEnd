<!DOCTYPE html>
<html>
	<body>
	
	<h1>Colour</h1>
		<table>
			<tr>
				<th>id</th>
				<th>colour</th>
			</tr>
			<?php
			
			$url = 'localhost:8080';
			
			
			//Establish connection
			$conn = new mysqli("localhost", "root", "P@55w0rd", "dccs");
			
			//Check connection
			if(!$conn)
			{
				die("Connection failed:". $conn-> connect_error);
			}
			//echo "Connection to Colour: Successful";
			
			//SQl query
			$sql = "SELECt ID,Colour from colour";
			
			$result = $conn-> query($sql);
			
			if($result-> num_rows>0)
			{
				while ($row=$result-> fetch_assoc())
				{
					echo "<tr><td>". $row["ID"]. "</td><td>". $row["Colour"]. "</td></tr>";
				}
			echo "</table>";
			}
				else
				{
					echo "0 result";
				}
					$conn-> close();
			?>
		</table>
	</body>
</html>