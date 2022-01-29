<?php
$cookie_name = "users";
$cookie_value ="Hello Dhaka City";
setcookie($cookie_name,$cookie_value,time()+(86400 *30),"/");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if (isset($_COOKIE[$cookie_name])) {
 	echo $_COOKIE[$cookie_name];
 } 
 else
 {
 	echo "Cookies Not set yet";
 }


 ?>

</body>
</html>