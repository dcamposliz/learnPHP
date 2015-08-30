<?php
	//this is our first PHP stoof :)

	// defining a variable below!
	$name = "David";
	
	// printing a string
	echo "hello world :)<br/>";
	
	// printing a variable (way 1) and concatenating a br/ 
	echo "$name" . '<br>';
	// printing variable  (way 2)
	echo $name . '<br>';
	// except, this does not work the way we expected:
	echo '$name' . '<br>';
	
	/*
		This is a multi-line comment,
		just like in JavaScript!
	*/

	// this is a link now:
	echo '<a href="http://www.google.com">Google</a>' . '<br>';

	// let's do something cooler now!
	$davidSite = "David";
	echo '<a href="http://www.davidacampos.com">' . $davidSite . '</a>' . '<br>';

	// we can also do escape stuff 
	echo 'we can\'t avoid typing awesome stuff!' . '<br>';

	// now we are typing cool stoof !
	$num1 = 10;
	$num2 = 20;

	// adding nums 1 & 2
	$num3 = $num1 + $num2 . '<br>';
	echo $num3;

	// subtracting nums 1 & 2
	$num3 = $num1 - $num2 . '<br>';
	echo $num3;

	// multiplying nums 1 & 2
	$num3 = $num1 * $num2 . '<br>';
	echo $num3;

	// dividing nums 1 & 2
	$num3 = $num1 / $num2 . '<br>';
	echo $num3;

	// loop while
	$x = 1;
	echo "Here is a while loop for you :)<br>";
	while ($x < 5) {
		echo "The number is: $x <br>";
		$x++;
	}

	// loop do while
	$y = 1;
	echo "Here is a do while loop for you :)<br>";
	do {
		echo "The number is: $y <br>";
		$y++;
	} while ($y < 10);

	// loop do while 2
	$z = 10;
	echo "Here is another do while loop for you :)<br>";
	do {
		echo "The number is: $z <br>";
		$z++;
	} while ($z <= 10);


	// for loop
	echo "Here is a for loop for you :)<br>";
	for ($xy = 0; $xy <= 10; $xy++) {
		echo "The number is: $xy <br>";
	}

	// loop for each
	echo "Here is a loop for each :)<br>";
	echo "This is printing the values of an array :) <br>";
	$colors = array("red", "green", "blue", "yellow");

	foreach ($colors as $value) {
		echo "$value <br>";
	}

	


?>

