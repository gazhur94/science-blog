<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; 

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Likes');

        for ($i=1; $i<10000; $i++)
        {
            DB::table('likes')->insert([
                'article_id'    => $faker->numberBetween(1,125),
                'device_name'   => $faker->bankAccountNumber,
                'like_dislike'  => $faker->numberBetween(-1,1),
                'created_at'  => \Carbon\Carbon::now(),
                'updated_at'  => \Carbon\Carbon::now(),

                ]);
        }
    }
}
