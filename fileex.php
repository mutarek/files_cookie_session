<?php
if (isset($_FILES['uploadFile'])) {
	$name = $_FILES['uploadFile']['name'];
	$type = $_FILES['uploadFile']['type'];
	$tmp_name = $_FILES['uploadFile']['tmp_name'];
	$error = $_FILES['uploadFile']['error'];
	if (move_uploaded_file($tmp_name,"uploaded-image/".$name)) {
		echo "Image Uploaded Successfully";
		inforSave($tmp_name);
	}
	else
	{
		echo "Something Wrong";
	}
}
else
{
	echo "Image Not Selected Yet";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="uploadFile">
		<br></br>
		<input type="submit" name="save" value="Upload">

	</form>

</body>
</html>