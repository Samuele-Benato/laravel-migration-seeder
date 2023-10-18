<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    { {
            for ($i = 0; $i < 25; $i++) {
                $train = new Train();

                $train->azienda = $faker->company;
                $train->stazione_partenza = $faker->city;
                $train->stazione_arrivo = $faker->city;
                $train->orario_partenza = $faker->time;
                $train->orario_arrivo = $faker->time;
                $train->codice_treno = $faker->ean8;
                $train->numero_carrozze = $faker->numberBetween(2, 12);
                $train->in_orario = $faker->boolean;
                $train->cancellato = $faker->boolean;

                $train->save();
            }

        }
    }
}