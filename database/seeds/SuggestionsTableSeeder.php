<?php

use Illuminate\Database\Seeder;
use App\User;

class SuggestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suggestions = [];

        $faker = Faker\Factory::create();

        for ($i = 1; $i <= 10; $i++)
        {
            $suggestions[] = [
                'title'=> $faker->catchPhrase,
                'content'=> $faker->text,
                'created_at'=> $faker->dateTime(),
                'updated_at'=> $faker->dateTime(),
                'user_id' => User::all()->random()->id,
                'addressed' => 1
            ];
        }
        DB::table('suggestions')->insert($suggestions);
    }
}
