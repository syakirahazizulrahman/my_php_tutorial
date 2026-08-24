<?php 

// multidimensional array

$blogs = [
    ['title' => 'Skybound', 'author' => 'Optimus', 'content' => 'lorem'],
    ['title' => 'More than meets the eye', 'author' => 'James', 'content' => 'lorem'],
    ['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem']
];

$ninjas = ['shaun', 'ryu', 'yoshi'];

// for($i = 0; $i < count($ninjas); $i++){
//     echo $ninjas[$i] . '<br />';
// }

// foreach($ninjas as $ninja){
//     echo $ninja . ' <br/>';
// }

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

// print_r($blogs);
// print_r($blogs[2]);
// echo $blogs[1]['title'];
// echo count($blogs);

// foreach($products as $product){
//     echo $product['name'] . ' - ' . $product['price'];
//     echo '<br />';
// }

$blogs[] = [
    'title' => 'castle party',
    'author' => 'peach',
    'content' => 'lorem'
];

// print_r($blogs);

$i = 0;

$popped = array_pop($blogs);

// print_r($popped);

while($i < count($products)){
    echo $products[$i]['name'];
    echo '<br />';
    $i++;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

    <p></p>

    <h1>Products</h1>

    <ul>
        <?php foreach($products as $product){ ?>

            <h3><?php echo $product['name']; ?></h3>
            <p>£<?php echo $product['price']; ?></p>

        <?php } ?>
    </ul>

</body>

</html>