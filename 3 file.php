<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

print_r($_POST);
echo '</br>';

$name = $_POST['name'];
$email = $_POST['email'];

echo 'Привет, '.$name;
echo '</br>';

$data = $name.','.$email;
echo file_put_contents("3 file.txt", $data.PHP_EOL, FILE_APPEND);

?>
</body>
</html>