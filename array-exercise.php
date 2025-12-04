<?php

// $fruits = ["apple", "banana", "cherry", "pear", "strawberry"];
// array_push($fruits, "plum", "raspberry");
// unset($fruits[0]);
// array_unshift($fruits, "pineapple", "grape");
// print_r($fruits);

// $buch = [
//   "titel" => "Warrior Cats",
//   "autor" => "Erin Hunter",
//   "preis" => 14.99,
// ];
// $buch["titel"] = "Warrior Cats 2";
// $buch["preis"] = 19.99;
// $buch["jahr"] = 2025;
// print_r($buch);

$students = ["Philipp", "Lion", "Sergiu", "Yusuf", "Niclas"];
$grades = [1.0, 1.0, 1.0, 5.0, 6.7];
$temp = array_combine($students, $grades);
$temp2 = $temp;
rsort($temp2);
$worst = array_search($temp2[0], $temp);

print_r($worst);

?>