<?php
$birth_year = 2003;
$birth_month = 5;
$birth_day = 10;

$current_year = 2026;
$current_month = 4;
$current_day = 4;

$age = $current_year - $birth_year;

if ($current_month < $birth_month || 
   ($current_month == $birth_month && $current_day < $birth_day)) {
    $age--;
}

echo "Your age is: " . $age;
?>