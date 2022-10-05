<?php

echo "<h4>Bubble Sort</h4>";
$numbers = [3,6,4,9,5,7,8,0];
echo "<h4>Before Sorting</h4>";
print_r($numbers);

$resultArray = bubble_sort($numbers);

echo "<h4>After Sorting</h4>";
print_r($resultArray);

function bubble_sort($array)
{
    $size = count($array) -1 ;

    for($i = 0; $i < $size; $i++)
    {
        for($j = 0; $j<($size - $i); $j++)
        {
            if($array[$j] > $array[$j+1])
            {
                $temp = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $temp; 

            }
        }
    }

    return $array;
}
?>