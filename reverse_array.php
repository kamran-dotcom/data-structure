<?php
$numbers = [6,2,3,4,5,];

echo "<h4>before reverse</h4>";
print_r($numbers);
$start = 0;

$end = count($numbers)-1;

    while($start < $end)
    {
        $temp = $numbers[$start];
        $numbers[$start] = $numbers[$end];
        $numbers[$end] = $temp;
        $start++;
        $end--;
    }

    echo "<h4>after reverse</h4>";
    print_r($numbers)
?>