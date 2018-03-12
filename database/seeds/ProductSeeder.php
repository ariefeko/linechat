<?php

use Illuminate\Database\Seeder;
// use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 10;

        for ($i = 1; $i <= $limit; $i++) {
            DB::table('products')->insert([ //,
                'nama' => 'Produk '.$i,
                'deskripsi' => $faker->text(50),
                'jumlah' => $faker->numberBetween(1, 100),
            ]);
        }
    }
}