<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

/*$array = [[1,2,3],[1,2,3],[1,2,3]];

foreach($array as $key=>$value)
{
    {
        echo $key.':'.$value.'</br>';
    }
}
echo '</br>';

foreach($array as $key=>$value)
{
    {
        echo $key.':'.print_r($value).'</br>';
    }
}
*/
//var_export($array);
//echo '</br>';
//print_r($array);
//echo '</br>';
//var_dump($array);
//echo '</br>';

$array = [[1,2,3],[1,2,3],[1,2,3]];

$a=var_export($array, true);
echo $a;
echo '</br>';

$new_array = array ( 0 => array ( 0 => 1, 1 => 2, 2 => 3, ), 1 => array ( 0 => 1, 1 => 2, 2 => 3, ), 2 => array ( 0 => 1, 1 => 2, 2 => 3, ));
print_r($new_array);
echo '</br>count '.count($array).'<hr>';

$array = [[1,2,3],[1,2,3],[1,2,3]];
$array[] = "banana";
echo '<h3>after add</h3>';
print_r($array);
echo '</br>count '.count($array).'<hr>';

$array[count($array)-1] = " ";
echo '<h3>after =""</h3>';

print_r($array);
echo '</br>count '.count($array).'<hr>';

unset($array[count($array)-1]);
echo '<h3>after unset</h3>';

print_r($array);
echo '</br>count '.count($array).'<hr>';

array_pop($array);
echo '<h3>after array_pop</h3>';
print_r($array);
echo '</br>count '.count($array).'<hr>';

echo '<h3>New Array</h3>';
$animals = array("wolf","tiger","bear","fox","hear","phoenix","dragon");
print_r($animals);
echo '</br>count '.count($animals).'<hr>';

echo '<h3>After asort</h3>';
asort($animals);
print_r($animals);
echo '<hr>';

echo '<h3>After array_shift</h3>';
$new_animals = array_shift($animals);
print_r($animals);
echo '</br>count '.count($animals).'<hr>';

echo '<h3>After arsort</h3>';
arsort($animals);
print_r($animals);
echo '<hr>';

echo '<h3>New Array with keys</h3>';
$realmagic = array("wolf"=>"real","tiger"=>"real","unicorn"=>"magic","bear"=>"real","fox"=>"real","hear"=>"real","phoenix"=>"magic","dragon"=>"magic");
print_r($realmagic);
echo '<hr>';

$real_animals=[];
$magic_animals=[];

foreach($realmagic as $animal=>$val)
{
	if($val=="real") {$real_animals[]=$animal; }
	else {$magic_animals[]=$animal; }
}
print_r($real_animals);
echo '</br>';
print_r($magic_animals);
echo '</br>';

foreach($magic_animals as $animal)
{
	$real_animals[]=$animal;
}
print_r($real_animals);
echo '<hr>';

echo '<h3>Usort</h3>';
$realmagic = array("wolf"=>"real","tiger"=>"real","unicorn"=>"magic","bear"=>"real","fox"=>"real","hear"=>"real","phoenix"=>"magic","dragon"=>"magic");
print_r($realmagic);
echo '</br>';

/*usort($realmagic, "cmp");
function cmp($a,$b)
{
	if($a!=$b)
	{
		return 1;
	}
	else {return 0;}
	return -1;
}
print_r($realmagic);
*/


?>
</body>
</html>