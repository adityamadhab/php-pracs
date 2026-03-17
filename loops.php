<?php
// Program to demonstrate the use of loops in PHP
echo "1. FOR LOOP <br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i <br>";
}

echo "2. WHILE LOOP <br>";
$j = 1;
while ($j <= 5) {
    echo "Value: $j <br>";
    $j++;
}

echo "3. DO WHILE LOOP <br>";
$k = 1;
do {
    echo "Count: $k <br>";
    $k++;
} while ($k <= 5);
?>
