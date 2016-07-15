<?php
	// simple string variable declaration and concatenation
	$var1 = "David";
	$var2 = "Campos";
	$var3 = " is recaping PHP.";
	echo $var1 . " " . $var2 . $var3 . '<br />';
?>
<br />
<?php
	// simple loop
	$limit = 10;
	for($init = 1; $init <= $limit; $init++ ){
		echo $init . '<br/>';
	}
?>
<br />
<?php
	// simple array and foreach loop
	$colors = array("green", "blue", "red");

	foreach($colors as $color){
		echo "$color <br/>";
	}
?>
<br />
<?php
	// simple function declaration and execution
	function sayHi($personName){
		echo "Hi " . $personName . "!";
	}

	sayHi("Andrew");
?>
<br />
<br />
<?php
	// sorting arrays
	$numberArray = array(453, 5435, 345, 32452, 765436, 12344);
	sort($numberArray);
	echo "Printing our array values to the DOM:" . '<br/>';
	print_r(array_values($numberArray));
?>
<br />
<?php
	// php globals
	$x = 75;
	$y = 25;

	function addition(){
		$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
	}
	addition();
	echo '<br />' . $z;
?>
<br />
<?php
	// instantiating class to create new object
	class foo {
		function do_foo() {
			echo "doing foo!";
		}
	}

	$bar = new foo;
	$bar -> do_foo();
?>
<br />
<?php
	$obj = (object) array('1' => 'foo');
	var_dump(isset($obj -> {'1'}));
	echo '<br/>';
	var_dump(key($obj));
?>