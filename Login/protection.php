<?php
	session_start();
	if ($_SESSION['user']=="")
	{
		header("Location: block.php");
	}
?>