<?php

namespace App\Models;

class libro
{
    public array $capitulo = [];
    public function __construct(int $isbn, String $nombre, String $autor){
    }
    public function agregarCapitulo(capitulo $capitulo){
        $this->capitulo[] = $capitulo;
    }
}

class capitulo
{
    public array $parrafo = [];
    public function __construct(int $numeroPagina, String $titulo){
    }
    public function agregarParrafo(parrafo $parrafo){
        $this->parrafo[] = $parrafo;
    }
}

class parrafo
{
    public array $oracion = [];
    public function __construct(int $numero, String $contenido){
    }
    public function agregarOracion(oracion $oracion){
        $this->oracion[] = $oracion;
    }
}

class oracion
{
    public array $palabra = [];
    public function __construct(int $numero, String $contenido){
    }
    public function agregarPalabra(palabra $palabra){
        $this->palabra[] = $palabra;
    }
}

class palabra
{
    public function __construct(String $palabra){
    }
}