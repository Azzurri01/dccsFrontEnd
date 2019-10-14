<!DOCTYPE html>
<html>
	<body style="background: url(abc.jpeg) no-repeat">
		<h1>Create</h1>
		
		<style>
			.Colour-form
			{
				border: 2px solid black;
				max-width: 250px;
				max-height: 200px;
				padding: 3px;
				background: #dddddd;
			}	
		</style>
	
			<form class="Colour-form" action="" method="post">
			ID:<br /> <input type="text" id="id"/><br />
			<br />
			Colour:<br /> <input type="text" id="colour"/><br />
			<br />
		<input type="Reset" value="Reset">
		<input type="Submit" name= "Submit" value="Create">
		</form>
	</body>
	
	<?php
	//Step 1 - Initialize
	$ch = curl_init();
	
	//Step 2 - set options
	curl_setopt($ch, CURLOPT_URL, 'localhost:8080/colour/create');	//URL where requests are sent token_get_all
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);	//Return instead of outputting directly
	curl_setopt($ch, CURLOPT_HEADER, 0);	//Set include header to false
	
	//Step 3 - Execute request and fetch response. Check for errors
	$output = curl_exec($ch);
	
	if($output === false)
	{
		echo "Curl error: " . curl_error($ch);
	}
	
	//Step 4 - Close curl handle
	curl_close($ch);
	
	//Step 5 - print output
	print_r($output);
	
	?>
</html>