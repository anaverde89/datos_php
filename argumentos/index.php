<?php

//valores
/*function greet($name)
{
    return "Hola, $name";
}

echo greet('Ana');*/

//referencias
/*$course='PHP';
function patch(&$course)//Modificador para usar un argumento por referencia
{
    $course='Laravel';
    echo $course;
}

patch($course);
echo $course;*/

//predeterminado
function greet($name='Ana')
{
    return "Hola, $name...";
}

echo greet('Nena');