<?php

//Bad
$ymdstr = $moment->format('y-m-d');

//Good
//TODO

//Bad
//Refactorizar para mejorar el contexto y qué significa cada cosa

Class DipServDat
{
    protected $u = 'http://servicio';
    protected $cl;

    public function __construct($s)
    {
        $this->cl = $c;
        $this->set($u);
    }
}

//Good
//TODO

//Bad
//Evitar inconsistencia en verbos
getUserInfo();
getUserData();
getUserRecord();
getUserProfile();

//Good
//TODO


//Bad
$l = ['Tlalnepantla', 'Naucalpan', 'Tlahuac'];

for ($i = 0, $t = count($l); $i < $t; $i++) {
    $lo = $l[$i];
    doStuff();
    doSomeOtherStuff();
    // Un momento, ¿Qué es `$lo`?
    dispatch($lo);
}

//Good
//TODO