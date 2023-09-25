<?php 
# array_values() - Returns all the values from the array.


$assoc = array("a" => "alu", "b" => "balu", "c" => "cat");
$values = array_values($assoc);
//print_r ($values);


$assoc = array("a" => "alu", "b" => "balu", "c" => "cat");
$values = array_keys($assoc);
//print_r($values);

$fruits = ["apple","balu","calu"];
$key = ["a","b","c"];

$combined = array_combine($key,$fruits);
//print_r($combined);


# array_fill() - Fills an array with values.

$filled = array_fill(0, 2, "apple");
//print_r($filled);

# array_push() - Adds one or more elements to the end of an array.
$fruits = array("apple", "banana", "cherry");
array_push($fruits, "date", "elderberry");

//print_r($fruits);

# array_pop() - Removes the last element from an array.
$fruits = array("apple", "banana", "cherry");
$lastFruit = array_pop($fruits);

//print_r($lastFruit);
//print_r($fruits);


# array_unshift() - Adds one or more elements to the beginning of an array.
$fruits = array("apple", "banana", "cherry");
array_unshift($fruits, "apricot");

//print_r($fruits);

# array_shift() - Removes the first element from an array.
$fruits = array("apple", "banana", "cherry");
$firstFruit = array_shift($fruits);
//print_r($fruits);

#array_splice() - Removes a portion of the array and replaces it with something else.
$fruits = array("apple", "banana", "cherry");
array_splice($fruits,1, 1, ["fig", "grape"]);

//print_r($fruits);

#array_slice() - Extracts a portion of the array.
$fruits = array("apple", "banana", "cherry");
$portion = array_slice($fruits, 0, 1);
//print_r($portion);



#in_array() - Checks if a value exists in an array.
$numbers = array(1, 2, 3, 4, 5);
if(in_array(3, $numbers)) {
  //  echo "3 is in the array.";  // This will be printed
}


#is_array() - Checks if a variable is an array.
if(is_array($numbers)) {
    //echo "This is an array.";
}



#array_merge() - Merges one or more arrays.
$arr1 = array("apple", "banana");
$arr2 = array("cherry", "date");
$merged = array_merge($arr1, $arr2);
//print_r($merged);


#array_replace() - Replaces values from one array to another.
$base = array("apple", "banana", "cherry");
$replacements = array(0 => "apricot", 2 => "date");
$replaced = array_replace($base, $replacements);
//print_r($replaced);
//print_r($base);


#array_flip() - Exchanges all keys with their associated values in an array.
$input = array("a" => 1, "b" => 2, "c" => 3);
$flipped = array_flip($input);
//print_r($flipped);


#array_change_key_case() - Changes the case of all keys in an array.
$input = array("First" => 1, "SecONd" => 4);
$result = array_change_key_case($input, CASE_UPPER);
//print_r($result);



#array_column() - Returns the values from a single column of the input array.
$records = array(
    array('id' => 2135, 'first_name' => 'John', 'last_name' => 'Doe'),
    array('id' => 3245, 'first_name' => 'Sally', 'last_name' => 'Smith'),
    array('id' => 5342, 'first_name' => 'Jane', 'last_name' => 'Jones')
);
$firstNames = array_column($records, 'first_name');
//print_r($firstNames);


#sort() - Sorts an array in ascending order.

$numbers = array(3, 1, 4, 1, 5);
sort($numbers);
//print_r($numbers);

#rsort() - Sorts an array in descending order.

$numbers = array(3, 1, 4, 1, 5);
rsort($numbers);
//print_r($numbers);

#asort() - Sorts an array and maintains index association.
$fruit = array("key1" => "lemon", "key2" => "orange", "key3" => "banana");
asort($fruit);
//print_r($fruit);

#arsort() - Sorts an array in reverse order and maintains index association.
$fruit = array("key1" => "lemon", "key2" => "orange", "key3" => "banana");
arsort($fruit);
//print_r($fruit);

#ksort() - Sorts an array by key.

$fruit = array("d" => "lemon", "a" => "orange", "b" => "banana");
ksort($fruit);
//print_r($fruit);

#krsort() - Sorts an array by key in reverse order.

$fruit = array("d" => "lemon", "a" => "orange", "b" => "banana");
krsort($fruit);
//print_r($fruit);

#natsort() - Sorts an array using natural order algorithm.
$files = array("img1.png", "img10.png", "img12.png", "img2.png");
natsort($files);
//print_r($files);

#natcasesort() - Sorts an array using a case-insensitive natural order algorithm.
$files = array("Img1.png", "img10.png", "img12.png", "IMG2.png");
natcasesort($files);
//print_r($files);


#uasort() - Sorts an array with a user-defined comparison function and maintains index association.

$people = array( "Peter" => 35, "Jack" => 32,  "Mary" => 28);
function ageComparator($a, $b) {
    return $a - $b;
}
uasort($people , 'ageComparator');
//print_r($people);


#array_walk() - Applies a user-defined function to each item in an array.

$fruits = array("apple", "banana", "cherry");

function test_alter(&$item, $key, $prefix) {
    $item = "$prefix: $item";
}

array_walk($fruits, 'test_alter', 'Folerna');
//print_r($fruits);

#array_walk_recursive() - Applies a user-defined function recursively to each item in an array.

$sweet = array('a' => 'apple', 'b' => array('p' => 'pear', 'c' => 'cherry'));

function test_print($item, $key) {
    echo "$key holds $item\n";
}

//array_walk_recursive($sweet, 'test_print');
//print_r($sweet);


#array_reduce() - Iteratively reduces the array to a single value using a callback function.

$numbers = array(1, 2, 3, 4, 5,);

function sum($carry, $item) {
    $carry += $item;
    return $carry;
}

$result = array_reduce($numbers, 'sum');
//echo $result;  // Outputs: 15

//array_column():This function returns the values from a single column in the input array.
$users = [
    ['id' => 1, 'name' => 'Alice', 'email' => 'alice@example.com'],
    ['id' => 2, 'name' => 'Bob', 'email' => 'bob@example.com'],
    ['id' => 3, 'name' => 'Tina', 'email' => 'tina@example.com'],
];
$names = array_column($users, 'email');
//print_r($names);

//array_diff():
  //Computes the difference of arrays. It compares the values of the first array with the values of following arrays and returns the differences.
  $array1 = ["a", "b", "c", "d"];
  $array2 = ["b", "c"];
  $result = array_diff($array1, $array2);
  //print_r($result);

  
//array_intersect():
//Computes the intersection of arrays.

$array1 = ["a", "b", "c", "d","ikbal"];
$array2 = ["b", "c", "e","ikbal"];
$result = array_intersect($array1, $array2);
//print_r($result);//

$array1 = ["a" => "green", "b" => "brown", "c" => "blue"];
$array2 = ["a" => "green", "b" => "yellow", "c" => "blue"];
$result = array_intersect_assoc($array1, $array2);
//print_r($result);
  
//array_intersect_key():
//Computes the intersection of arrays using keys for comparison.

$array1 = ["blue" => 1, "red" => 2, "green" => 3];
$array2 = ["green" => 4, "yellow" => 7];
$result = array_intersect_key($array1, $array2);
//print_r($result);

#array_unique(): Removes duplicate values from an array.

$input = ["a", "b", "a", "c", "d", "b"];
$result = array_unique($input);
//print_r($result);



#array_rand():Picks one or more random entries out of an array.

$input = ["apple", "banana", "cherry", "date", "fig"];

$randomKey = array_rand($input);
//echo $input[$randomKey];

$randomKeys = array_rand($input, 2);
//print_r($randomKeys);

#shuffle():Shuffles (randomizes the order of) the elements in an array.

$numbers = [1, 2, 3, 4, 5];
shuffle($numbers);
//print_r($numbers);
// Create an array of numbers from 1 to 5
$numbers = range(1, 100);
//print_r($numbers);

// Create an array of letters from 'a' to 'e'
$letters = range('a', 'z');
//print_r($letters);

// Using a step value
$evenNumbers = range(0, 10, 3);
//print_r($evenNumbers);

$name = "Alice";
$age = 25;
$country = "Wonderland";

$result = compact('name', 'age', 'country');
//print_r($result);

# array_pad(): Pads an array to the specified length with a value.

$input = [12, 10, 9];

// Positive length will pad to the Right
$result = array_pad($input, 5, -1);
print_r($result);




