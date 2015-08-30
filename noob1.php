<?php
	
	// first php code !

	// php printing strings onto browser window
	
	echo "php strings<br>";

	echo "<br>";

		// printing strings
		echo "hello world :)<br/>";
		echo "This is some php! <br>";
		// we can also do escape stuff 
		echo 'we can\'t stop typing the php!' . '<br>';

	echo "<br>";

	// php defining variables

	echo "php variables<br>";

		// defining a variable below!
		$name = "David";

		echo "<br>";
		
		// printing a variable (way 1) and concatenating a br/ 
		echo "$name" . '<br>';
		// printing variable  (way 2)
		echo $name . '<br>';
		// except, this does not work the way we expected:
		echo '$name' . '<br>';
		
		/*
			This is a multi-line comment,
			just like in JavaScript!
			:)
		*/

		// this is a link now:
		echo '<a href="http://www.google.com">Google</a>' . '<br>';

		// let's do something cooler now!
		$davidSite = "David";
		echo '<a href="http://www.davidacampos.com">' . $davidSite . '</a>' . '<br>';



	echo "<br>";
	
	// now we'll type some cool stoof

	// php math

	echo "php math<br>";

	echo "<br>";

		// declaring integer type variables
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

		/*	exponents don't work in php 5 yet, lol
		// exponents
		$num3 = $num1 ** $num2  . '<br>' ;
		echo $num3;
		*/

		// modulus
		$num3 = $num1 % $num2 . '<br>' ;
		echo $num3;

		
	echo "<br>";

	// php loops

	echo "php loops<br>";

	echo "<br>";

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

		
	echo "<br>";

	// php Comparison Operators

	echo "php comparison operators<br>";

		echo "<br>";

		$x = 100;
		$y = "100";

		var_dump($x == $y); // returns true because values are equal


		


?>

