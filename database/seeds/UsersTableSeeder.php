<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= new User();
        $user->name = 'emmett';
        $user->username = 'ejp8611';
        $user->email='ejp8611@gmail.com';
        $user->is_admin = 1;
        $user->is_super_admin = 1;
        $user->password = Hash::make(env('USER_PASSWORD'));
        $user->save();

        $users = [];

        $faker = Faker\Factory::create();

        for ($i = 1; $i <= 10; $i++)
        {
            $users[] = [
                'name'=> $faker->name,
                'username' => $faker->userName,
                'email'=> $faker->email,
                'password'=> $faker->password,
                'is_admin' => 0,
                'is_super_admin' => 0,
                'created_at'=> $faker->dateTime(),
                'updated_at'=> $faker->dateTime()
            ];
        }
        DB::table('users')->insert($users);
    }
}
