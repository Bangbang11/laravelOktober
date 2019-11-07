<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke tabel article
        // DB::table('articles')->insert([
        //     'title' =>'Learn Laravel',
        //     'content' =>'lorem ipsum A seeder class only contains one method by default: run. This method is called when the db:seed Artisan command is executed. Within the run method, you may insert data into your database however you wish. You may use the query builder to manually insert data or you may use Eloquent model factories.',
        //     'author' =>'Bangbang'
        // ]);

        // input nilai dengan Faker
        $faker = Faker::create('id_ID');
        for($i = 1; $i<=50; $i++){
            DB::table('articles')->insert([
                'title' => $faker->sentence,
                'content' => $faker->text,
                'author' => $faker->name
            ]);
        }
    }
}
