<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('professionals')->delete();

        DB::table('professionals')->insert([
            ['dni' => '11111111A', 'name' => 'Laura', 'surname' => 'Bretones', 'photo' => 'fotoLauraBretones.jpg', 'phoneNumber' => '123456789', 'email' => 'laura@gmail.com', 'schedule' => 'Mañanas de 10:00h a 14:00h. Tardes de 16:00h a 20:00h.', 'education' => 'Grado en Terapia Ocupacional. Máster en Atención Temprana. Especialista en Integración Sensorial, Rechazo del Inodoro y Alimentación en la Infancia.', 'experience' => 'Múltiples prácticas externas. Cinco años en geriatría y dos años en pediatría.', 'specialty_id' => '1', 'consultingRoom_id' => '1'],
            ['dni' => '22222222B', 'name' => 'María', 'surname' => 'García', 'photo' => 'fotoMariaGarcia.jpg', 'phoneNumber' => '987654321', 'email' => 'maria@gmail.com', 'schedule' => 'Mañanas de 10:00h a 14:00h. Tardes de 16:00h a 20:00h.', 'education' => 'Grado en Logopedia.', 'experience' => 'Cuatro años en atención temprana.', 'specialty_id' => '2', 'consultingRoom_id' => '3'],
            ['dni' => '33333333C', 'name' => 'Carmen', 'surname' => 'González', 'photo' => 'fotoCarmenGonzalez.jpg', 'phoneNumber' => '123654789', 'email' => 'carmen@gmail.com', 'schedule' => 'Mañanas de 10:00h a 14:00h. Tardes de 16:00h a 20:00h.', 'education' => 'Grado en Fisioterapia.', 'experience' => 'Tres años en geriatría.', 'specialty_id' => '3', 'consultingRoom_id' => '4'],
            ['dni' => '44444444D', 'name' => 'David', 'surname' => 'Medina', 'photo' => 'fotoDavidMedina.jpg', 'phoneNumber' => '321456987', 'email' => 'david@gmail.com', 'schedule' => 'Mañanas de 10:00h a 14:00h. Tardes de 16:00h a 20:00h.', 'education' => 'Grado en Psicología.', 'experience' => 'Seis años en geriatría.', 'specialty_id' => '4', 'consultingRoom_id' => '2'],
        ]);
    }
}
