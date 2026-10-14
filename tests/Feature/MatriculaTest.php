
<?php

use App\Models\Curso;
use App\Models\Docente;
use App\Models\Estudiante;
use App\Models\Grupo;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('crea un grupo con dos estudiantes matriculados', function () {
    $curso = Curso::create([
        'codigo' => 'PROG101',
        'nombre' => 'Programación',
    ]);

    $docente = Docente::create([
        'nombre' => 'Carlos',
    ]);

    $grupo = Grupo::create([
        'curso_id' => $curso->id,
        'docente_id' => $docente->id,
        'numero' => 1,
        'cupo' => 30,
    ]);

    $estudiante1 = Estudiante::create([
        'nombre' => 'Ana',
    ]);

    $estudiante2 = Estudiante::create([
        'nombre' => 'Luis',
    ]);

    $grupo->estudiantes()->attach($estudiante1->id, [
        'fecha' => '2026-10-14',
        'nota_final' => 90,
    ]);

    $grupo->estudiantes()->attach($estudiante2->id, [
        'fecha' => '2026-10-14',
        'nota_final' => 85,
    ]);

    expect($grupo->estudiantes()->count())->toBe(2);

    expect($grupo->curso->codigo)->toBe('PROG101');

    expect($grupo->docente->nombre)->toBe('Carlos');

    expect(\Illuminate\Support\Facades\DB::table('matriculas')
    ->where('grupo_id', $grupo->id)
    ->where('estudiante_id', $estudiante1->id)
    ->exists()
)->toBeTrue();
});
