<?php

$courses=[
    10=>'php',
    100=>'javascript', 
    1000=>'laravel'
];
krsort($courses);
echo '<pre>';
//var_dump($courses);

var_dump(array_slice($courses,1));
