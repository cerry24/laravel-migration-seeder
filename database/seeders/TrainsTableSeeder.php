<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $newTrain = new Train();
            $newTrain->azienda = $faker->sentence(2, true);
            $newTrain->stazione_di_partenza = $faker->sentence(2, true);
            $newTrain->stazione_di_arrivo = $faker->sentence(2, true);
            $newTrain->orario_di_partenza = $faker->dateTime();
            $newTrain->orario_di_arrivo = $faker->dateTime();
            $newTrain->codice_treno = $faker->isbn10();
            $newTrain->numero_carrozze = $faker->randomDigitNot(0);
            $newTrain->in_orario = $faker->boolean(70);
            $newTrain->cancellato = $faker->boolean(15);
            $newTrain->save();
        }
    }
}