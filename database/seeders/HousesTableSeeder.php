<?php

namespace Database\Seeders;

use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<1000; $i++) {

            $house = new House();
            $house->room_number = $faker->randomDigitNotNull();
            $house->square_meters = $faker->randomNumber(3, false);
            $house->floor = $faker->randomDigitNotNull();
            $house->description = $faker->paragraph();
            $house->address = $faker->streetAddress();
            $house->city = $faker->city();
            $house->province = 'MI';
            $house->price = $faker->numberBetween(1000, 1000000);
            $house->url_photo = $faker->url();
            $house->save();

        }
    }
}
