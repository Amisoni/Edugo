<?php 
@session_start();
	//session_unset();
	unset($_SESSION['id']);
	@session_destroy();
	header("Location:registration/first.php?l=1");
	//unset($_GET['logout.php']);


?>