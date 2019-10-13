<!DOCTYPE html>
<html>
	<body>
		<h1>Table: Colour</h1>
		
		<style>
			.Colour-table
			{
				border: 2px solid black;
				border-collapse: collapse;
				font-size: 1.5em;
				min-width: 170px;
				text-align: left;
				max-width: 500px;
				background-color: white;
			}
				
			.Colour-table thead 
			{
				background-color: #33FFDF;
				font-weight: bold;
			}
			
			.Colour-table thead: active-row
			{
				background-color: #33FFDF;
				font-weight: bold;
			}
		</style>
		
		<table class="Colour-table">
		
		<thead>
			<tr>
				<th>id</th>
				<th>colour</th>
			</tr>
		</thead>
		
		<tbody>
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
		</tbody>
		<br />
		<input type="Submit" value="OK">
		</table>
	</body>
</html>