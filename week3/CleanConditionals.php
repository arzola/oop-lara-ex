<?php

//TODO poner 3 ejercicios donde se pueden poner limpieza de condicionales y switch (introducción al patrón strategía)


//Bad
//Avoid type checking
function travelToTexas($vehicle)
{
    if ($vehicle instanceof Bicycle) {
        $vehicle->pedalTo(new Location('texas'));
    } elseif ($vehicle instanceof Car) {
        $vehicle->driveTo(new Location('texas'));
    }
}

//Good
//TODO

//Tocar el ejemplo de la inutilidad de comprobar valores ya sea por medio del typehint o de comprobar que algo no sea cero si al final del dia vamos a enviar un mensaje y detener el funcionamiento

//Bad
//Avoid type checking
function combine($val1, $val2)
{
    if (!is_numeric($val1) || !is_numeric($val2)) {
        throw new \Exception('Must be of type Number');
    }

    return $val1 + $val2;
}

//Good
//TODO


