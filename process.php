<html>
<head>
	<title>Post Method</title>
</head>

<body>

<?php
	$fname=$_POST["firstname"];
	$sname=$_POST["lastname"];
	$email=$_POST["mail"];
	$phone=$_POST["phone"];
	$sex=$_POST["sex"];
	$text=$_POST["text"];

	echo "First Name: ".$fname."<br>";
	echo "Last Name: ".$sname."<br>";
	echo "Email: ".$email."<br>";
	echo "Phone: ".$phone."<br>";
	echo "Sex: ".$sex."<br>";
	echo "Comments: ".$text."<br>";
?>
</body>
</html>