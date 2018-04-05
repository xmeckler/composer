<?php
/**
 * Created by PhpStorm.
 * User: wilder17
 * Date: 04/04/18
 * Time: 21:58
 */

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

$hello = new \App\Wcs\Hello();

echo $hello->talk() . '<br/>';

$helloWorld = new \HelloWorld\SayHello();

echo $helloWorld->world();