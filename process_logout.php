<?php


session_start();
if(isset($_SESSION['csc2024_40043298']))
{

	unset($_SESSION['csc2024_40043298']);
	header("Location: login.php");
}

else

{

header("Location: login.php");
}

?>
