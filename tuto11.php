<?php 

	// comparisons & booleans (true or false)
	//echo true // echo's "1"
	//echo false // echo's ""

	// numbers
	//echo 5 < 10;
	//echo 5 > 10;
	//echo 5 == 10;
	//echo 10 == 10;
	//echo 5 != 10;
	//echo 5 <= 5;
	//echo 5 >= 5;

	// strings
	//echo 'shaun' < 'yoshi';
	//echo 'shaun' > 'yoshi';
	//echo 'shaun' > 'Shaun';
	//echo 'mario' == 'mario';
	//echo 'mario' == 'Mario';

	// loose vs strict equal comparison

	//echo 5 == '5';
	//echo 5 === '5';
	//echo 5 === 5;

	//echo true == 1;
	echo true === 1;
	// conditional statements

	// $price = 20;

	// if($price < 30){
	// 	echo 'if condition met';
	// } elseif($price === 20) {
	// 	echo 'elseif condition met';
	// } else {
	// 	echo 'condition not met';
	// }

	$products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2]
	];

	foreach($products as $product){

		// if($product['price'] < 15 && $product['price'] > 2){
		// 	echo $product['name'] . '<br />';
		// }

		// if($product['price'] > 20 || $product['price'] < 10){
		// 	echo $product['name'] . '<br />';
		// }

	}

?>

<!DOCTYPE html>
@@ -38,5 +42,15 @@
</head>
<body>

	<div>
		<ul>
			<?php foreach($products as $product){ ?>
				<?php if($product['price'] > 15){ ?>
					<li><?php echo $product['name'] ?></li>
				<?php } ?>
			<?php } ?>
		</ul>
	</div>

</body>
</html>