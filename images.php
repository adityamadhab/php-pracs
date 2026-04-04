<?php
$day = "Tuesday"; 

switch($day) {
    case "Monday":
        $img = "photos/monday.png";
        break;
    case "Tuesday":
        $img = "photos/tuesday.png";
        break;
    case "Wednesday":
        $img = "photos/wednesday.jpeg";
        break;
    default:
        $img = "photos/default.jpeg";
}

echo "<img src='$img' width='300'>";
?>