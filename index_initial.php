<?php 
session_start();

	include("connection.php");
	include("functions.php");
	echo "<h1>This is the index page</h1>";
	echo "<br>";

	$user_data = check_login($con);
	$sr_store = $_SESSION['sr_no'];
    $query_get = "select * from transaction where sr_no = '$sr_store' limit 1";
    $result_get = mysqli_query($con, $query_get);
    echo "<br>";
	echo "<table border='1'>";
	while ($row = mysqli_fetch_assoc($result_get)) { // Important line !!! Check summary get row on array ..
    echo "<tr>";
    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
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

<body>
	<style>
		.hero{
			background: no-repeat;
			background-attachment: fixed;
			background-position: centre;
			margin: auto;
			width: 1500;
			height: 1000;	
		}
	</style>

	hello, <?php echo $_SESSION['sr_no']; ?>;
	<br><br>
	<a href="logout.php">Logout</a>

</body>
</html>