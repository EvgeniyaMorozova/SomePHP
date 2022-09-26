<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

$userdata = file("3 file.txt" );
print_r($userdata);
echo '</br>';

foreach($userdata as $u)
{
	$user = str_getcsv($u);
	print_r($user);
}



?>
</body>
</html>