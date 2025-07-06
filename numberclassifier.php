<?php
// define the number (you can change this value or take input)
$number = -4;

// check if the number is Positive or Negative or Zero
if ($number > 0) {
    $posNeg = "Positive";
} elseif ($number < 0) {
    $posNeg = "Negative";
} else {
    $posNeg = "Zero";
}

// check if the number is Even or Odd
if ($number % 2 == 0) {
    $evenOdd = "Even";
} else {
    $evenOdd = "Odd";
}

// show output
echo "The number $number is $posNeg and $evenOdd.";
?>