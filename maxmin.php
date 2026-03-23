<?php
$marks1 = array(15,17,22,25,12);
$marks2 = array(13,14,16,18);
$marks3 = array(15,16,23,35,33); 

$combined_array = array_merge($marks1, $marks2, $marks3);

$max_element = max($combined_array);
$min_element = min($combined_array);

echo "Maximum element is : " . $max_element;
echo "<br>";
echo "Minimum element is : " . $min_element;
?>