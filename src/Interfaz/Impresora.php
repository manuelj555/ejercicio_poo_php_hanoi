<?php
/**
 * Optime Consulting
 * User: maguirre@optimeconsulting.com
 * Date: 7/02/2019
 * Time: 5:09 PM
 */

namespace App\Interfaz;

interface Impresora
{
    public function borrarPantalla();
    public function titulo($texto);
    public function texto($texto, $saltar = true);
    public function saltar();
}