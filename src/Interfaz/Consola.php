<?php
/**
 * Optime Consulting
 * User: maguirre@optimeconsulting.com
 * Date: 7/02/2019
 * Time: 5:31 PM
 */

namespace App\Interfaz;

class Consola implements Escanner, Impresora
{

    /**
     * @var Escanner
     */
    private $escanner;
    /**
     * @var Impresora
     */
    private $impresora;

    public function __construct(Escanner $escanner, Impresora $impresora)
    {
        $this->escanner = $escanner;
        $this->impresora = $impresora;
    }

    public function leerTexto()
    {
        return $this->escanner->leerTexto();
    }

    public function leerNumero()
    {
        return $this->escanner->leerNumero();
    }

    public function borrarPantalla()
    {
        return $this->impresora->borrarPantalla();
    }

    public function titulo($texto)
    {
        return $this->impresora->titulo($texto);
    }

    public function texto($texto, $saltar = true)
    {
        return $this->impresora->texto($texto, $saltar);
    }

    public function saltar()
    {
        return $this->impresora->saltar();
    }
}