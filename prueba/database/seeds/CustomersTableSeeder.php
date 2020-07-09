<?php

use App\customers;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        customers::truncate();

        $faker = \Faker\Factory::create();

        // Crear customers ficticios en la tabla
        for($i = 0; $i < 25; $i++) {
            customers::create([
                'name' => $faker->name,
                'lastname' => $faker->lastName,
                'document' => $faker->sentence,
            ]);
        }
    }
}
