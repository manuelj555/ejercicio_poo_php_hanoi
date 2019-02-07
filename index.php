<?php
/**
 * User: maguirre@optimeconsulting.com
 * Date: 7/02/2019
 * Time: 5:07 PM
 */

use App\Interfaz\ImpresoraPorConsola;

require_once __DIR__ . '/vendor/autoload.php';

var_dump('HOLA');

$impresora = new ImpresoraPorConsola();

//$impresora->borrarPantalla();

$impresora->titulo('HOla mundo!');
$impresora->borrarPantalla();
$impresora->titulo('mÁs fino!');
