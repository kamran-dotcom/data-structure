<?php

echo "<h4>Insertion Sort</h4>";

$numbers = [23,45,3,1,45,34,2,1,3,9];
echo "<p>UnSorted array</p>";
print_r($numbers);
$count = count($numbers);

for($i = 0; $i < $count; $i++)
{
    // first item as a sorted
    $key = $numbers[$i];
    // first element already sorted so 
    $j = $i-1;

    while($j >= 0 && $numbers[$j] > $key )
    {
        $numbers[$j + 1] = $numbers[$j];

        $j--;
    }

    $numbers[$j + 1] = $key;
}

echo "<p>Sorted array</p>";
print_r($numbers);
?>