<?php
session_start();
require_once('new-connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Email Verification</title>
	<style type="text/css">
		#container{
			height:400px;
			width:400px;
			text-align:center;
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
		.green{
			background-color:pink;
			border:1px solid red;
			color:red;
			padding:5px;
		}
	</style>
</head>
<body>
	<div id="container">
	<h3>Enter your email address!</h3>
	<form action="process.php" method="post">
		<table>
			<tr>
				<td>E-mail:</td>
				<td><input type="text" name="email"></td>
				<td><input id="button" type="submit"></td>
			</tr>
		</table>
	</form>
	<?php 
	if (isset($_SESSION['error'])){
		echo $_SESSION['error'];
		unset($_SESSION['error']);
	}
	?>
	</div>
</body>
</html>