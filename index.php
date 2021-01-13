<?php

use poepnko\MyLog;
use poepnko\PopenkoException;
use poepnko\Quatro;

include "core\EquationInterface.php";
include "core\LogAbstract.php";
include "core\LogInterface.php";
include "poepnko\MyLog.php";
include "poepnko\Line.php";
include "poepnko\Quatro.php";
include "poepnko\PopenkoException.php";


ini_set('error_reporting', E_ALL);


try {
    $version = file_get_context("version");
    MyLog::log("Версия программы " . $version);
    $values = array();

    for ($i = 1; $i < 4; $i++) {
        echo "Enter " . $i . " argument: ";
        $values[] = readline();
    }
    $aa = $values[0];
    $ab = $values[1];
    $ac = $values[2];


    MyLog::log("Equation: (" . $aa . ")x**2+(" . $ab . ")x+(" . $ac . ")=0");

    $p = new Quatro();
    $x = $p->solve($aa, $ab, $ac);

    $str = implode(", ", $x);
    MyLog::log("Roots: " . $str);
} catch (PopenkoException $e) {
    MyLog::log($e->getMessage());
}

MyLog::write();