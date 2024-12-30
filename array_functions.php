<?php

// find 1st element of an array by callback test
$numbers = [1, 2, 3, 4, 5, 6];
$firstMatch = array_find(
    array: $numbers, 
    callback: fn (int $number) => $number % 2 === 0
);
$firstMatchedKey = array_find_key(
    array: $numbers, 
    callback: fn (int $number) => $number % 2 === 0
);

// find all elements of an array by callback
$numbers = [1, 2, 3, 4, 5, 6];
$allMatches = array_filter(
    array: $numbers, 
    callback: fn (int $number) => $number % 2 === 0
);

// True: at least one element is dividable by 2
array_any(
    array: $numbers,
    callback: fn (int $number) => $number % 2 === 0
);

// False: not all elements are dividable by 2
array_all(
    array: $numbers,
    callback: fn (int $number) => $number % 2 === 0
);

// True: all elements are smaller than 10
array_all(
    array: $numbers,
    callback: fn (int $number) => $number < 10
);


//////

// array_is_list()
// check if an array has structure of a list
$list = ["a", "b", "c"];
array_is_list($list); // true
//
$notAList = [1 => "a", 2 => "b", 3 => "c"];
array_is_list($notAList); // false
//
$alsoNotAList = ["a" => "a", "b" => "b", "c" => "c"];
array_is_list($alsoNotAList); // false
?>