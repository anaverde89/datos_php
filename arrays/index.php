<?php

$courses=[
    'frontend'=>'javascript',
    'framework'=>'laravel',
    'backend'=>'php',
];

/*foreach ($courses as $course) {
    echo "$course<br>";
}*/

function upper( $course,$key)
{
    echo $key . ': ' . strtoupper($course).'<br>';
}

array_walk($courses, 'upper');