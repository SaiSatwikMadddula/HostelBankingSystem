<?php 
session_start();

	include("connection.php");
	include("functions.php");
	echo "<h1>Hello User</h1>";
	echo "<h2>Transaction Details</h2>";


	$user_data = check_login($con);
	$sr_store = $_SESSION['sr_no'];
    $query_get = "select * from transaction where sr_no = '$sr_store' limit 1";
    $result_get = mysqli_query($con, $query_get);
    echo "<br>";
	echo "<table border='1'>";
	while ($row = mysqli_fetch_assoc($result_get)) { 
    foreach ($row as $field => $value) { 
        echo "<td>" . $value . "</td>"; 
    }
    echo "</tr>";
}
echo "</table>";

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<style>
	.hero{
		background: repeat-x  repeat-y;
		background-attachment: fixed;
		background-position: centre;
		margin: auto;
		width: 1500;
		height: 1000;	
	}
</style>

<body class = "hero" background="bg_img2.jpeg">

	<!-- hello, <?php echo $_SESSION['sr_no']; ?>; -->
	<br><br>
	<a href="logout.php">Logout</a>

</body>
</html>