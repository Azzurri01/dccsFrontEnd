<!DOCTYPE html>
<html>
	<body style="background: url(abc.jpeg) no-repeat">
		<h1>Update</h1>
		
		<style>
			.Colour-form
			{
				border: 2px solid black;
				max-width: 250px;
				max-height: 200px;
				padding: 3px;
				background-color: #dddddd;
			}
		
		</style>
		
			<form class= "Colour-form" action="index.php" method="post">
			ID:<br /> <input type="text" id="id"/><br />
			<br />
			Colour:<br /> <input type="text" id="colour"/><br />
			<br />
		<input type="Reset" value="Reset">
		<input type="Submit" value="Update">
		</form>
		
	</body>
</html>