<!DOCTYPE html>
<html>

<head>
<h1 style="background-color: #dddddd", align="center", width="500px">DayCare Center System</h1>
</head>

	<body>
		<style>
			.Address-form
			{
				border: 2px solid black;
				max-width: 250px;
				max-height: 300px;
				padding: 3px;
				background: #dddddd;
				margin-left: auto;
				margin-right: auto;
			}
			.menu
			{
				margin-left: 690px;
				margin-right: auto;
			}
		</style>
		
<div class="menu">
  <nav>
    <ul>
		<li> <a href="/Frontend/php/Home.html">Home</a> </li>
		<li> <a href="/Frontend/php/Address.html">Parent</a> </li>
    </ul>
  </nav>
  </div>
		
		<form align="center" class="Address-form" action="" method="post">
		<h1 align="left">Create</h1>
		<table>
			<tr>
				<td>First Name:</td>
				<td><input type="text" name="fname" class="form-control" placeholder="Enter Name"></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type="text" name="lname" class="form-control" placeholder="Enter Surname"></td>
			</tr>
			<tr>
				<td>Gender:</td>
				<td><input type="text" name="gender" class="form-control" placeholder="Enter Gender"></td>
			</tr>
			<tr>
				<td>DOB:</td>
				<td><input type="text" name="dob" class="form-control" placeholder="Enter dob"></td>
			</tr>
			<tr>
				<td>Age:</td>
				<td><input type="text" name="age" class="form-control" placeholder="Enter Age"></td>
			</tr>
			<tr>
			<td><input type="submit" name="submit" class="btn btn-info" value="Create"></td>
			</tr>
		</table>
			<br />
		</form>

<?php
$curl = curl_init();
$fname= "";
$lname= "";
$gender= "";
$age= "";
$dob= "";

if(isset($_POST['fname']))
{
	$fname = $_POST["fname"];
}


if(isset($_POST['lname']))
{
	$lname = $_POST["lname"];
}

if(isset($_POST['gender']))
{
	$gender = $_POST["gender"];
}

if(isset($_POST['dob']))
{
	$dob = $_POST["dob"];
}

if(isset($_POST['age']))
{
	$age = $_POST["age"];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
	//$name = $_POST["fname"];
	//$name = $_POST["lname"];
	$name = $_POST["gender"];
	$name = $_POST["dob"];
	$name = $_POST["age"];
}

if(isset($_POST['submit']))
{
curl_setopt_array($curl, array(
  CURLOPT_PORT => "8080",
  CURLOPT_URL => "http://localhost:8080/parent/create",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\r\n    \"gender\": \"m\",\r\n    \"dob\": \"d\",\r\n    \"age\": 0,\r\n    \"firstName\": \"dd\",\r\n    \"lastName\": \"dd\"\r\n}",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Accept-Encoding: gzip, deflate",
    "Authorization: Basic YWRtaW46Y3B1dFBUYWRtaW4=",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Length: 21",
    "Content-Type: application/json",
    "Cookie: JSESSIONID=6354D515A8B7513D2B7858815FADB76D",
    "Host: localhost:8080",
    "Postman-Token: 6c6f5774-6c8f-47a0-ab92-bc9e19c9de6b,c04fd2fd-e3c1-44a7-805b-7b77fd23f046",
    "User-Agent: PostmanRuntime/7.18.0",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
}
?>


	</body>
	
	<footer style="background-color: #dddddd", align="center", width="500px">
	<h3>Your child is in good care...!</h3>
	</footer>
</html>

<?php
function pre_r($array)
{
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}
?>