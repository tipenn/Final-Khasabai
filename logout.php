<?php
	
	session_start();
	include('process.php');
	session_destroy();
	header("Location: login.php");
	
?>