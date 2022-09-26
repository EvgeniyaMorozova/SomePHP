<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form method="post">
<input name="name" type="text" placeholder = "name">
<input name="email" type="text" placeholder = "email">
<input type="submit">
</form>

<?php

$name = $_POST['name'];
$email = $_POST['email'];

echo 'Привет, '.$name;
echo '</br>';

$data = $name.','.$email;
echo file_put_contents("4 file.txt", $data.PHP_EOL, FILE_APPEND);
echo '</br>';

$user_lines = file("4 file.txt");

foreach($user_lines as $user_line)
{
	$user = explode(",",$user_line);
	echo $user[0].','.$user[1].'<br>';
}

?>


</body>
</html>