<?php
function reverseString($str) {
    $reversed = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}

$string = "Hallo, Welt!";
$result = reverseString($string);
echo "Umgekehrter String: " . $result;
?>