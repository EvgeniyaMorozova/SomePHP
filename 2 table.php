<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
   table {
	   border-collapse: collapse;}
   tr,td {
	   border: 1px solid black;
   }
   </style>
</head>
<body>
<?php

echo '<table>';

for($i=0;$i<100;$i++)
{
	echo '<tr>';
	for($x=0;$x<10;$x++)
	{
		echo '<td>'.$x.'</td>';
	}
	echo '</tr>';
}

echo '</table>';

?>
</body>
</html>