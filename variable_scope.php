<html>
	<head>
		<title>Variable Scope</title>
	</head>
	<body>
	<?php
	
	$var = "OUTSIDE";
	function test1() {
		$var = "INSIDE";
		echo $var . "<br />";
	}
	test1();
	echo $var . "<br />";
	
	echo "<hr />";

	$var = "outside";
	function test2() {
		global $var;
		$var = inside;
		echo $var . "<br />";
	}
	test2();
	echo $var . "<br />";
	
	echo "<hr />";

	$var = 1;
	function test3() {
		static $var = 2; // keeps track of variable $var. Initialization works only once;
		echo $var . "<br />";
		$var++;
	}
	test3();
	test3();
	test3();
	echo $var . "<br />";
	?>
	</body>
</html>
