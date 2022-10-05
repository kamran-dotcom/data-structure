<?php
echo "<h4>Selection Sort</h4>";
$numbers = [23,56,34,23,67,2,5,0];
echo "<p>Before Sorting</p>";
print_r($numbers);
$count = count($numbers)-1;
for($i = 0; $i < $count; $i++)
{
    $min = $i;
    for($j = $i+1; $j < $count; $j++)
    {
        if($numbers[$min] < $numbers[$j])
        {
            $min = $j;
        }

    }
    $temp = $numbers[$i];
    $numbers[$i] = $numbers[$min];
    $numbers[$min] = $temp;
}

echo "<p>After Desecending Sort</p>";
print_r($numbers);

?>