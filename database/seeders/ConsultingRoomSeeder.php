<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultingRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('consulting_rooms')->delete();

        DB::table('consulting_rooms')->insert([
            ['name' => 'Consulta 1', 'photo' => 'consulta1.jpg', 'description' => 'Consulta dedicada a la Terapia Ocupacional. Se pueden encontrar todo tipo de materiales y herramientas para ayudar a los usuarios a fomentar su autonomía en las actividades de la vida diaria.'],
            ['name' => 'Consulta 2', 'photo' => 'consulta2.jpg', 'description' => 'Consulta dedicada a la Psicología. Un ambiente cómodo y seguro para que el usuario y su familia puedan expresar sus sentimientos y pensamientos.'],
            ['name' => 'Consulta 3', 'photo' => 'consulta3.jpg', 'description' => 'Consulta dedicada a la Logopedia. Un espacio rico en materiales para fomentar el desarrollo del lenguaje y la comunicación.'],
            ['name' => 'Consulta 4', 'photo' => 'consulta4.jpg', 'description' => 'Consulta dedicada a la Fisioterapia. Un área equipada con aparatos para el tratamiento y rehabilitación física de los usuarios.'],
        ]);
    }
}
