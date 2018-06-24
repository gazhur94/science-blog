<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; 

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Article');

        for ($i=1; $i<125; $i++)
        {
            DB::table('articles')->insert([
                'name'        => $faker->sentence,
                'category_id' => $faker->numberBetween(1,5),
                'summary'     => implode($faker->paragraphs(1)),
                'text'        => implode($faker->paragraphs(30)),
                'author'      => $faker->name(),
                'likes'       => $faker->numberBetween(0,5000),
                'created_at'  => \Carbon\Carbon::now(),
                'updated_at'  => \Carbon\Carbon::now(),

                ]);
        }
    }
}
