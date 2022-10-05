<?php
echo "<h4>Count Special Character</h4>";
$sentance = "kdjkdjf dkfjkdjf dkfjkdfj jdfkjkfj jdfjkfj jkdfjkjf jdfjkf";
$character = 'k';
$count = 0;

for($i = 0; $i< strlen($sentance); $i++)
{
    if(substr($sentance,$i,1) == $character)
    {
        $count++;
    }
}

echo "<h4>",$character," comes ",$count," times</h4>";
?>