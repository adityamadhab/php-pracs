<?php
function divideNumbers($numerator, $denominator) {
    if ($denominator === 0) {
        throw new Exception("Division by zero is not allowed.");
    }

    return $numerator / $denominator;
}

try {
    $result = divideNumbers(200, 0);
    echo "Result: " . $result;
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage();
}
?>