<?php

//valores
function greet()
{
    return ['PDF','vista'];
}

var_dump(greet());

exit();//detiene el sistema
return; //solo retorna algo

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
/*function greet($name='Ana')
{
    return "Hola, $name...";
}

echo greet('Nena');*/