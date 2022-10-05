<?php
// swap numbers without using third variable
$first = 20;
$second = 10; 

echo "<h4>Number Swaping without 3rd variable</h4>";
echo "<p>Before Swaping</p>";
echo "<p>First Number: ",$first," Second: ",$second;
$first = $first + $second; //30
$second = $first - $second; //20
$first = $first - $second; // 10

echo "<p>After Swaping</p>";
echo "<p>First Number: ",$first," Second: ",$second;

?>