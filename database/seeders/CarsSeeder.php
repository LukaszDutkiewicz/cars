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
        DB::table('cars')->truncate();
        $faker = FakerFactory::create();
        $fakerCars = (new \Faker\Factory())::create();
        $fakerCars->addProvider(new \Faker\Provider\Fakecar($fakerCars));
        $data = [];
        for ($i = 0; $i < 30; $i++) {
            $data[] = ['vin' => $fakerCars->vin(), 'model' => $fakerCars->vehicleModel(), 'description' => $fakerCars->vehicleType(), 'color' => $faker->colorName(), 'price' => $faker->numberBetween(1000, 10000), 'brand_id' => NULL, 'model_id' => NULL];
        }
        //$data = ['vin' => 12345, 'model' => '126p', 'description' => 'maluch', 'color' => 'red', 'price' => 123, 'brand_id' => NULL];
        DB::table('cars')->insert($data);
    }
}
