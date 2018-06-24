<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; 

class CommentsTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Commens');

        for ($i=1; $i<1000; $i++)
        {
            DB::table('comments')->insert([
                'article_id' => $faker->numberBetween(1,125),
                'username'   => $faker->name(),
                'email'      => $faker->email(),
                'comment'    => implode($faker->paragraphs(1)),
                'created_at'  => \Carbon\Carbon::now(),
                'updated_at'  => \Carbon\Carbon::now(),

                ]);
        }
    }
}
