<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Doctor;
use Faker\Factory as Faker;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Usamos Faker para generar datos ficticios
        $faker = Faker::create();

        // Creamos 10 doctores ficticios
        for ($i = 0; $i < 10; $i++) {
            Doctor::create([
                'Nombre' => $faker->name,
                'Apellido'=> $faker->name,
                'Especialidad' => $faker->randomElement(['Cardiología', 'Dermatología', 'Pediatría', 'Neurología']),
                'Telefono' => $faker->phoneNumber,
                'Correo_Electronico' => $faker->email,
            ]);
        }
    }
}
