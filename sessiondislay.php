<?php
session_start();
session_unset();
session_destroy();
echo "Destroyed";
if ($_SESSION['username']) {
	echo "Welcome";
}
else
{
	echo "Please login with your credintial";
}

?>