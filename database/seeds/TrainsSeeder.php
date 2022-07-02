<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        for($i = 0; $i < 50; $i++){
            $train = new Train();
            $train->azienda = $faker->word();
            $train->stazione_di_partenza = $faker->city();
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->time('H:i');
            $train->orario_di_arrivo = $faker->time('H:i');
            $train->codice_treno = $faker->unique()->randomNumber(9, true);
            $train->numero_carrozze = $faker->randomNumber(2, false);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            
            $train->save();
        }

    }
}
