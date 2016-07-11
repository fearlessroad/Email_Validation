<?php
session_start();
require_once('new-connection.php');

if (isset($_POST['email'])){

		// if (!strpbrk($_POST['email'], '@')){

		// 	$_SESSION['error'] = "<div class='green'><p>I'm sorry, but usually emails contain an @ symbol. Please make sure you entssr a valid email address.</div>";
		// 	header("Location: email_verification.php");
		// }
	// testing

		// else if(!strpbrk($_POST['email'], '.')){

		// 	$_SESSION['error'] = "<div class='green'><p>Um please add a .domain to your email address.</div>";
		// 	header("Location: email_verification.php");
		// 	}

		 if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)=== false){

			$_SESSION['error'] = "<div class='green'><p>Do you even know what an email address is?</div>";
			header("Location: email_verification.php");
		}

	else{
	$query = "INSERT INTO emails (email, created_at) VALUES ('{$_POST['email']}', NOW())";
	run_mysql_query($query);

	// $retrieveData = fetch_all("SELECT email FROM emails");

	// foreach($retrieveData as $email) {
	// 	echo "<p>".$email['email']."</p>";
	// }
	// die();

	header('Location: success.php');
	}
}
?>