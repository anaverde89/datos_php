<?php

echo 'Un texto de una línea
varias lineas
comilla simple \' backslash \\ continuar con mas texto
$ variable<br>';

$name = 'italo';
echo "Mi nombre es $name<br>";
echo 'Mi nombre es ' . $name . '<br>';

$courses = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];

echo "{$courses['backend'][0]}<br>";

class User
{
    public $name = 'ana';
}

$user = new User;

echo "$user->name quiere aprender {$courses['backend'][0]}<br>";

$course = ['backend' => 'PHP'];

$teacher = 'ana';
$ana = 'Developer';
echo "$teacher es ${$teacher}<br>";

function getTeacher()
{
    return 'teacher';
}

echo "{${getTeacher()}} aprende PHP, otra vez...";
