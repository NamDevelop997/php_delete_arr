<?php
$arr1 = [
    [
        'id' => 1,
        'fullName' => 'Ma Van Nam',
        'age' => 18
    ],
    [
        'id' => 2,
        'fullName' => 'Pham Thi Hoa',
        'age' => 120
    ]
];

echo '<pre>';
print_r($arr1);
echo '</pre>';

//delete array use unset 
unset($arr1[1]);
echo '<pre>';
print_r($arr1);
echo '</pre>';

//delete element of multi array
unset ($arr1[0]['age']);
echo '<pre>';
print_r($arr1);
echo '</pre>';