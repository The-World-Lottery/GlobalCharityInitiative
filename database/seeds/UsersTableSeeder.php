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
        $user->phone_number = 2108838541;
        $user->is_admin = 1;
        $user->is_super_admin = 1;

        $user->password = Hash::make(env('USER_PASSWORD'));
        $user->save();

        $aves= new User();
        $aves->name = 'aves';
        $aves->username = 'candy';
        $aves->email='candy0man@ymail.com';
        $aves->phone_number = 2104149752;
        $aves->is_admin = 1;
        $aves->is_super_admin = 1;

        $aves->password = Hash::make(env('USER_PASSWORD'));
        $aves->save();

        $users = [];

        $faker = Faker\Factory::create();

        for ($i = 1; $i <= 10; $i++)
        {
            $users[] = [
                'name'=> $faker->name,
                'username' => $faker->userName,
                'email'=> $faker->email,
                'password'=> $faker->password,
                'phone_number'=>$faker->phoneNumber,
                'is_admin' => 0,
                'is_super_admin' => 0,
                'created_at'=> $faker->dateTime(),
                'updated_at'=> $faker->dateTime()
            ];
        }
        DB::table('users')->insert($users);
    }
}
