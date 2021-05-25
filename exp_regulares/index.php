<?php
/*
/:  CONTENEDOR
^: INICIO
$: FINAL
-: RANGO
[]: PATRÓN 
{}: CONDICIÓN

0: no cumple con la condicion
1: cumple con la condicion
*/
$password='123456';
var_dump((bool)preg_match('/^[0-9]{6,9}$/',$password)) ;