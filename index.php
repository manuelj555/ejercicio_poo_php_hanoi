<?php
/**
 * User: maguirre@optimeconsulting.com
 * Date: 7/02/2019
 * Time: 5:07 PM
 */

use App\Interfaz\ImpresoraPorConsola;

require_once __DIR__ . '/vendor/autoload.php';

var_dump('HOLA');

$consola = new \App\Interfaz\Consola(
    new \App\Interfaz\EscannerPorConsola(),
    new ImpresoraPorConsola()
);

//$impresora->borrarPantalla();

$consola->titulo('HOla mundo!');
$consola->borrarPantalla();
$consola->titulo('mÁs fino!');
