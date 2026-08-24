<?php 

	// variable scope
	//include('tuto15ninjass.php');
	
	//require('tuto15ninjass.php');

	// local vars
	//include 'tuto15ninjas.php';

	function myFunc(){
		$price = 10;
		echo $price;
	}

	// myFunc();
	// echo $price;

	function myFuncTwo($age){
		echo $age;
	}

	// myFuncTwo(25);
	// echo $age;

	// global variables

	$name = 'mario';

	// function sayHello(){
	// 	global $name;
	// 	$name = 'yoshi';
	// 	echo "hello $name ";
	// }

	// sayHello();
	// echo $name;

	function sayBye(&$name){
		$name = 'wario';
		echo "bye $name ";
	}

	sayBye($name);
	echo $name;
	//require 'ninjas.php';

	//echo 'end of php';

?>

@@ -50,5 +19,8 @@ function sayBye(&$name){
</head>
<body>

	<?php include('tuto15content.php'); ?>
	<?php include('tuto15content.php'); ?>

</body>
</html>