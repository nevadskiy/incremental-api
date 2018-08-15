<?php

use App\Lesson;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LessonsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Lesson::truncate();

        foreach (range(1, 30) as $index) {
            Lesson::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph(4),
                'is_active' => $faker->boolean
            ]);
        }
    }
}
