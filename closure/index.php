<?php

/* $greet=function ($name)//Variable que requiere logica
{
    return "Hola, $name";
};

echo $greet('Ana'); */

function greet(Closure $lang,$name) // Closure espera funcion anonima
{
    return $lang($name);
}

$es=function ($name)
{
    return "Hola, $name";
};

$en=function ($name)
{
    return "Hello, $name";
};

echo greet($en,'Ana');