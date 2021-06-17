<?php

session_start();

if(isset($_SESSION['sr_no']))
{
	unset($_SESSION['sr_no']);

}

header("Location: login.php");
die;