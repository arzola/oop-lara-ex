<?php

//TODO Agregar ejercicio para limpiar números mágicos mímimo 5 ejemplos

//BAD
Class User
{
    public static $ps = [1, 2, 3, 4, 5, 6];

    public function getPermissions()
    {
        return [2, 4];
    }
}

//¿Qué es 3?
if (in_array(3, $u->getPermissions())) {

}

//Good
//TODO

//Classical examples

//argument
round($number, 4);

//assign
$var = 10;

//default_parameter
function foo($default = 3)
{
}

//operation

$bar = $foo * 20;

//property
private
$bar = 10;

//return()
return 5;

//condition()
$var < 7;

//switch_case()
//	case 3;
