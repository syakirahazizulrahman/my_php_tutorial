<?php 

// continue and break

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

foreach($products as $product){

    if($product['name'] === 'lightning bolt'){
        break;
    }

    if($product['price'] > 15){
        continue;
    }

    echo $product['name'] . '<br />';
}


// functions

function sayHello($name = 'shaun', $time = 'morning'){
    echo "Good $time, $name";
}

sayHello();
echo '<br />';

sayHello('mario');
echo '<br />';

sayHello('yoshi', 'night');
echo '<br />';


function formatProduct($product){
    return "The {$product['name']} costs £{$product['price']} to buy <br />";
}

echo formatProduct([
    'name' => 'gold star',
    'price' => 20
]);
