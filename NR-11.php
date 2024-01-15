<?php
function calculateAverage($numbers) {
    $sum = 0;
    $count = count($numbers); 
    foreach ($numbers as $number) {
        $sum += $number;
    }
    $average = $sum / $count; 
    return $average;
}

$numbers = [2, 4, 6, 8, 10];
$result = calculateAverage($numbers);
echo "Average: " . $result;
?>