<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

echo file_get_contents("3 file.txt" );
echo '</br>';

echo $new_string = 'newuser, newemail@mail.ru';
echo '</br>';
$user = explode(",",$new_string);
print_r($user);
echo '<hr>';

$userdata = file_get_contents("3 file.txt" );

$users = explode(PHP_EOL,$userdata);
print_r($users);
echo '<hr>';

/*foreach($users as $user)
{
	print_r( explode(",",$user));
}
*/

$final_array=[];

foreach($users as $user)
{
	$person=( explode(",",$user));
	
	$personkeys=[];
	$personkeys= array("username"=>$person[0] , "email"=>$person[1] );
	
	$final_array[]=$personkeys;
}

print_r($final_array);

?>
</body>
</html>