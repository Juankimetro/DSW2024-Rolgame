<?php
namespace Dsw\Rolgame;

abstract class Personaje{ 
  public $nombre;
  public $nivel = 0 ;
  public $puntosDeVida = 0;

  public function __construct($nombre, $nivel, $puntosDeVida){
    $this->nombre = $nombre;
    $this->nivel = $nivel;
    $this->puntosDeVida = $puntosDeVida;
  }

  abstract public function atacar();

  abstract public function defender($dañoInicial);
  public function subirNivel() {
    $this->nivel++;
  }

}


