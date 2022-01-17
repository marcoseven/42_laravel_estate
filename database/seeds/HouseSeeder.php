<?php

use App\Models\House;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 20; $i++) {
            # code...
            $_house = new House();
            $_house->image = $faker->imageUrl();
            $_house->address = $faker->address();
            $_house->city = $faker->city();
            $_house->post_code = $faker->randomElement(['ABC123', 'DEF123', 'FFF333']);
            $_house->rooms = $faker->numberBetween(3, 5);
            $_house->square_meters = $faker->numberBetween(200, 400);
            $_house->for_sale = $faker->boolean();
            $_house->to_let = $faker->boolean();
            $_house->is_available = $faker->boolean(100);
            $_house->save();
        }


  /*       foreach ($houses as $house) {
            $_house = new House();
            $_house->image = $house['image'];
            $_house->address = $house['address'];
            $_house->city = $house['city'];
            $_house->post_code = $house['post_code'];
            $_house->rooms = $house['rooms'];
            $_house->square_meters = $house['square_meters'];
            $_house->for_sale = $house['for_sale'];
            $_house->to_let = $house['to_let'];
            $_house->is_available = $house['is_available'];
            $_house->save();

        } */

    }
}
