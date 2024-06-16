<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('specialties')->delete();

        DB::table('specialties')->insert([
            ['name' => 'Terapia Ocupacional', 'description' => 'Profesión socio-sanitaria que utiliza como herramienta la ocupación con el fin de fomentar la autonomía en las actividades de la vida diaria y aumentar la calidad de vida de los usuarios.'],
            ['name' => 'Logopedia', 'description' => 'Profesión sanitaria que se enfoca en la comunicación humana y las alteraciones que ésta pueda presentar.'],
            ['name' => 'Fisioterapia', 'description' => 'Profesión sanitaria que utiliza técnicas manuales y equipos especializados para promover la movilidad, aliviar el dolor y mejorar la función física y el bienestar de los pacientes'],
            ['name' => 'Psicología', 'description' => 'Profesión socio-sanitaria que estudia el comportamiento humano y los procesos mentales, abordando temas como la cognición, las emociones, el desarrollo, y la salud mental.'],
        ]);
    }
}
