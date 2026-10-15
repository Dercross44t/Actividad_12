<?php

namespace App\Models;


class companiaAerea
{
    public array $listaAviones = [];

    public function __construct(String $codigo, String $nombre){
    }
    public function agregarAvion(avion $avion){
        $this->listaAviones[] = $avion;
    }
}

class avion
{
    public function __construct(String $matricula, String $modelo){
    }
}

class vuelo
{
    public avion $avion;
    public aeropuerto $aeropuertoOrigen;
    public aeropuerto $aeropuertoDestino;

    public function __construct(String $numeroVuelo){
    }
    public function agregarAvion(avion $avion){
        $this->avion = $avion;
    }
    public function agregarAeropuertoOrigen(aeropuerto $aeropuertoOrigen){
        $this->aeropuertoOrigen = $aeropuertoOrigen;
    }
    public function agregarAeropuertoDestino(aeropuerto $aeropuertoDestino){
        $this->aeropuertoDestino = $aeropuertoDestino;
    }
}

class aeropuerto
{
    public function __construct(String $codigo, String $nombre, String $ciudad){
    }
}
