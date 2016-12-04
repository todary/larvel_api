<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Maker;
use Faker\Factory;

class MakerSeed extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 6; $i++) {
            Maker::create([
                'name' => $faker->word(),
                'phone' => $faker->randomDigit(5),
            ]);
        }

    }

}
