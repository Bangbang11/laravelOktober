<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i<=25; $i++){
            DB::table('bukus')->insert([
                'judul_buku' => $faker->sentence,
                'pengarang' => $faker->name,
                'penerbit' => $faker->company,
                'tahun_terbit' => $faker->year
            ]);
        }
    }
}
