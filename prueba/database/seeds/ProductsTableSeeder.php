<?php

use App\products;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        products::truncate();

        $faker = \Faker\Factory::create();

        // Crear productos ficticios en la tabla
        for($i = 0; $i < 25; $i++) {
            products::create([
                'name' => $faker->name,
                'code' => $faker->randomAscii,
                'price' => $faker->numberBetween(1,100),
                'status' => $faker->randomElement(['active','deleted'])
            ]);
        }
    }
}
