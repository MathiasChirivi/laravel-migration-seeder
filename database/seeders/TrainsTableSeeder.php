<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trains;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){

        for ($i=0; $i < 10; $i++) { 
            $newTrain = new Trains();
            $newTrain->Compagnia = $faker->word(1);
            $newTrain->Codice_treno = $faker->randomDigitNot(2);
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->data_partenza = $faker-> date('Y_m_d');
            $newTrain->numero_carrozza = $faker-> randomDigitNot(2);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->viaggio_cancellato = $faker->boolean();

            $newTrain->save();
        }
    }
}
