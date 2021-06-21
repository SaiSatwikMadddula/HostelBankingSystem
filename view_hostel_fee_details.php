<?php 
session_start();

	include("connection.php");
	include("functions.php");
	echo "<h1 style= color:#66ff66;>HOSTEL STUDENTS BANKING SYSTEM</h1>";
	echo "<h2 style= color:#ff5349;>Hello, User</h2>";
	echo '<span style="color:#6f6;text-align:center;">Student Details : </span>';
	echo "<br>";
	$user_data = check_login($con);
	$sr_store = $_SESSION['sr_no'];
    $query_get = "select * from hostel_details where sr_no = '$sr_store' limit 1";
    $result_get = mysqli_query($con, $query_get);
    echo "<br>";
	echo "<table border='1'>";
	while ($row = mysqli_fetch_assoc($result_get)) { 
    foreach ($row as $field => $value) { 
        echo "<td >" . $value . "</td>";
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
	<br><br>
	<span style= color:#aaf8ff;text-align:center;>Thank you, <?php echo $_SESSION['sr_no']; ?></span>;
	<br><br>
	<a href="index_initial.php" <span style="color:#6699cc;text-align:right;"></span>back</a>


</body>
</html>