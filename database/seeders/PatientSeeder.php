<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        
        for ($i=0; $i < 50000; $i++) {
            $patientData[] = [
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
            ];
        }

        $chunks = array_chunk($patientData, 5000);

        foreach ($chunks as $chunk) {
            Patient::insert($chunk);
        }
    }
}
