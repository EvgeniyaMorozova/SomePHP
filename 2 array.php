<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

$array = [1,2,3,4,5,6,7,8,9,10];
echo $array[4];
echo "</br>";

echo count($array);
echo "</br>";

for($i=0;$i<count($array);$i++) 
{
    echo $array[$i];
}
echo "</br>";

foreach($array as $el)
{
	echo $el;
}
echo "</br>";
//exit();

$array = [[1,2,3],[1,2,3],[1,2,3]];

echo '<ul>';
foreach($array as $innerarray)
{
    foreach($innerarray as $el) 
    {
        echo '<li>'.$el.'</li>';
    }
}
echo '</ul>';

$array = array("first"=>[1,2,3],"second"=>[1,2,3],"third"=>[1,2,3]);

echo '<ul>';

foreach($array as $key=>$value)
{
   echo '<li>'.$key.'</li>';
}
echo '</ul>';

echo '<ul>';
foreach($array as $key=>$value)
{
   echo '<li>'.$key.'<ul>';
   foreach($value as $el)
   {
	   echo '<li>'.$el.'</li>';
	 
   }
   echo '</ul></li>';
}
echo '</ul>';

?>
</body>
</html>