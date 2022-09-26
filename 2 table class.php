<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
   <style>
    table {
	   border-collapse: collapse;
	   display:inline-block;}
    tr,td {
	   border: 1px solid black;}
    .red {
	   background: red;
	   color: white}
   </style>
</head>
<body>
<?php

echo '<table>';
for($i=1;$i<101;$i++)

{   if($i%2==0) { $attributes='class="red"'; }  else { $attributes=''; }
    echo "<tr $attributes>";
    for($x=0;$x<10;$x++)
    {
        echo "<td>$x</td>";
    }
    echo '</tr>';
}
echo '</table>';
echo "\n";

$result="<table>";

for($i=1;$i<101;$i++)

{   if($i%2==0) { $attributes='class="red"'; }  else { $attributes=""; }
    $result.= "<tr $attributes>";
    for($j=0;$j<10;$j++)
    {
        $result.= "<td>$j</td>";
    }
    $result.= '</tr>';
}
$result.= "</table>";

echo $result;
?>
</body>
</html>