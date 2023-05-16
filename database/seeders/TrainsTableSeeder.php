<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $train = new Train();

            $train->company = $faker->company();
            $train->departures_station = $faker->randomElement(['Milano','Firenze','Napoli']);
            $train->arrival_station = $faker->randomElement(['Milano','Firenze','Napoli']);
            $train->departures_time = $faker->date('Y-m-d');
            $train->arrival_time = $faker->date('Y-m-d');
            $train->train_code = $faker->randomElement(['ABC123EFG']);
            $train->cabin_number = $faker->randomNumber(1);

            $train->save();
        }
    }
}
