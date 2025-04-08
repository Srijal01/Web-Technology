<?php
function addNumbers(int $a, $b) {
    $b = (int)$b; // Explicitly cast $b to an integer
    return $a + $b;
}
echo addNumbers(5, "5 days"); // Output will be 10
?>
