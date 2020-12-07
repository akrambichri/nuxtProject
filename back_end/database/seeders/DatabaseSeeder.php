<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

    $faker = Factory::create();

    for($i = 0; $i < 50; $i++) {
       Post::create([
            'title' => $faker->sentence(),
            'content' => $faker->text,
        ]);
    }    }
}
