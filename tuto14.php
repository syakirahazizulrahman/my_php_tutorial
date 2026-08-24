<?php 

// functions
// variable scope


function sayHello($name = 'shaun', $time = 'morning'){
    echo "Good $time, $name";
}


// local vars

function myFunc(){
    $price = 10;
    echo $price;
}


// sayHello();
// sayHello('mario');
sayHello('yoshi', 'night');


// myFunc();
// echo $price;


function formatProduct($product){
    return "The {$product['name']} costs £{$product['price']} to buy <br />";
}


function myFuncTwo($age){
    echo $age;
}


// formatProduct(['name' => 'gold star', 'price' => 20]);

// $formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
// echo $formatted;

// myFuncTwo(25);
// echo $age;


// global variables

$name = 'mario';


// function sayHello(){
//     global $name;
//     $name = 'yoshi';
//     echo "hello $name ";
// }


// sayHello();
// echo $name;


function sayBye(&$name){
    $name = 'wario';
    echo "bye $name ";
}


sayBye($name);

echo $name;