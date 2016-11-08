<!DOCTYPE html>
<html>
<head>
<title>Acessing RestFUL APP via PHP</title>
</head>
<body>
<form method="post" action="">
<input type="text" name="username">
<input type="submit" name="submit" value="Submit">
</form>

<?php

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	//$url = "http://myphpserver/RestExample/Src/Database.php?username=$username";//For Local Machine
	$url = "https://enigmatic-waters-53240.herokuapp.com/Database.php?username=$username";
	echo "url : $url";
	$client = curl_init($url);
	echo "</br>client : $client";
	curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($client);
	echo "<br>response : $response";
	$result = json_decode($response);
	echo "<br>result : $response";
	if( empty($result) ) {
		//var_dump($response);
		echo '<b>User does not exist</b></br>';
	} else {
		var_dump($response);
	}
}

?>
 
</body>
</html>
