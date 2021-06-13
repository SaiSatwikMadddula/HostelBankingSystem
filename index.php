<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
	<a href="hostel_details.php">Enter Hostel Details</a><br><br>
	<a href="student.php">Enter student Details</a><br><br>
	<a href="account_details.php">Enter account Details</a><br><br>
	<a href="payment.php">Enter payment Details</a><br><br>
	<a href="transaction.php">Enter transaction Details</a><br><br>
</body>
</html>