<?php
/**
 * Optime Consulting
 * User: maguirre@optimeconsulting.com
 * Date: 7/02/2019
 * Time: 5:10 PM
 */

namespace App\Interfaz;

class ImpresoraPorConsola implements Impresora
{

    public function borrarPantalla()
    {
        system('clear');
    }

    public function titulo($texto)
    {
        $tamanio = strlen($texto);
        $lineaHorizontal = str_repeat('#', $tamanio + 10);
        $lineaHorizontalSecundaria = '#'.str_repeat(' ', $tamanio + 8).'#';

        $this->texto($lineaHorizontal);
        $this->texto($lineaHorizontalSecundaria);
        $this->texto('#    '.strtoupper($texto). '    #');
        $this->texto($lineaHorizontalSecundaria);
        $this->texto($lineaHorizontal);
        $this->saltar();
    }

    public function texto($texto, $saltar = true)
    {
        echo $texto . ($saltar ? $this->saltar() : '');
    }

    public function saltar()
    {
        echo PHP_EOL;
    }
}