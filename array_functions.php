

// find 1st element of an array by callback test
$numbers = [1, 2, 3, 4, 5, 6];
$firstMatch = array_find(
    array: $numbers, 
    callback: fn (int $number) => $number % 2 === 0
);

// find all elements of an array by callback
$numbers = [1, 2, 3, 4, 5, 6];
$allMatches = array_filter(
    array: $numbers, 
    callback: fn (int $number) => $number % 2 === 0
);
