<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class ModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('models')->truncate();
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        $data = [];
        for ($i = 0; $i < 30; $i++) {
            $data[] = ['name' => $faker->vehicleModel()];
        }
        DB::table('models')->insert($data);
    }
}
