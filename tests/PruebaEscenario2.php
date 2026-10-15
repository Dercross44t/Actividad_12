<?php

use App\Models\aeropuerto;
use App\Models\avion;
use App\Models\vuelo;


test("prueba", function () {
    $origen = new aeropuerto("0000", "Origen", "A");
    $destino = new aeropuerto("0001", "Destino", "B");
    $avion = new avion("1234", "ABC");
    $vuelo = new vuelo("1111");

    $vuelo->agregarAvion($avion);
    $vuelo->agregarAeropuertoOrigen($origen);
    $vuelo->agregarAeropuertoDestino($destino);

    expect($vuelo->avion)->toBe($avion);
    expect($vuelo->aeropuertoOrigen)->toBe($origen);
    expect($vuelo->aeropuertoDestino)->toBe($destino);
});
