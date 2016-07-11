<?php
session_start();
require('new-connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Success Page!</title>
	<style type="text/css">
		#container{
			height:400px;
			width:400px;
			margin:0px auto;
			padding:20px;
		}
		#button{
			height:20px;
			width:50px;
			border:1px solid black;
			background-color:#cceeff;
			margin:5px;
		}
		#button:hover{
			background-color:white;
		}
		#success{
			background-color:#33cc33;
			border:1px solid black;
			text-align:center;
		}
		ul li{
			list-style: none;
			text-align:left;
		}
	</style>
</head>
<body>
	<div id="container">
		<div id="success">
		<h3>The email address you entered
is a VALID email address! Thank you!</h3></div>
		<div id="list">
		<h4>Email Addresses Entered:</h4>	
					<?php 
					$retrieveData = fetch_all("SELECT email FROM emails");
					foreach($retrieveData as $email) {
						echo "<p>".$email['email']."</p>";
					} 
					?>
		</div>
	</div>
</body>
</html>