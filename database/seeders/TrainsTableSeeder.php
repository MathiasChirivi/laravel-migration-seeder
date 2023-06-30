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

        $italianCompanies = [
            'Trenitalia',
            'Italo',
            'Frecciarossa',
            'Frecciargento',
            'Frecciabianca',
            'Regionale',
            'InterCity',
        ];

        $italianStations = [
            'Roma Termini',
            'Milano Centrale',
            'Napoli Centrale',
            'Firenze Santa Maria Novella',
            'Venezia Santa Lucia',
            'Torino Porta Nuova',
            'Bologna Centrale',
            'Genova Piazza Principe',
            'Palermo Centrale',
            'Catania Centrale',
        ];
        
        for ($i=0; $i < 10; $i++) { 
            $newTrain = new Trains();
            $newTrain->Compagnia = $faker->randomElement($italianCompanies);
            $newTrain->Codice_treno = $faker->randomDigitNot(4);
            $newTrain->stazione_partenza = $faker->randomElement($italianStations);
            $newTrain->stazione_arrivo = $faker->randomElement($italianStations);
                while ($newTrain->stazione_arrivo === $newTrain->stazione_partenza) {
                    $newTrain->stazione_arrivo = $faker->randomElement($italianStations);
                }
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->data_partenza = $faker->dateTimeBetween('2023-06-29', '+6 days');
            $newTrain->numero_carrozza = $faker-> randomDigitNot(2);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->viaggio_cancellato = $faker->boolean();

            $newTrain->save();
        }
    }
}
