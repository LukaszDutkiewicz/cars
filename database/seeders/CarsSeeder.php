<?php

namespace Database\Seeders;

use Carbon\Factory;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('cars')->truncate();
        $faker = FakerFactory::create();
        $fakerCars = (new \Faker\Factory())::create();
        $fakerCars->addProvider(new \Faker\Provider\Fakecar($fakerCars));
        $data = [];
        for ($i = 0; $i < 30; $i++) {
            $data[] = ['vin' => $fakerCars->vin(), 'description' => $fakerCars->vehicleType(), 'color' => $faker->colorName(), 'price' => $faker->numberBetween(1000, 10000), 'registration' => $fakerCars->vehicleRegistration(), 'registration_date' => $faker->date(), 'brand_id' => $faker->numberBetween(1, 20), 'model_id' => $faker->numberBetween(1, 20)];
        }
        DB::table('cars')->insert($data);
    }
}
