<?php
// Create an array and push on the names
// of your closest family and friends

$friendsFamily = array();

array_push($friendsFamily, "Susana");
array_push($friendsFamily, "Jessica");
array_push($friendsFamily, "Erik");
array_push($friendsFamily, "Roberto");
array_push($friendsFamily, "Sarah");

sort($friendsFamily);

$size = count($friendsFamily);
echo "Array size is " . $size;

echo "<br/>";

echo "Array position zero is held by " . $friendsFamily[0];

echo "<br/>"

// in $winnerNumber we set the upper bound to be equal to $size-1 because 
// count() counts from (1 to n)
// when we also echo array positions from (0 - n-1)
;    
$winnerNumber = rand(0, $size-1);
echo "Winner holds array position " . $winnerNumber . " ... who could it be?";

echo "<br/>";

$winnerPerson = $friendsFamily[$winnerNumber];
$winnerCaps = strtoupper($winnerPerson);
echo "Winner is " . $winnerCaps;

// Sort the list

// Randomly select a winner!

// Print the winner's name in ALL CAPS
?>