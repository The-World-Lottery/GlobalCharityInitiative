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
        $user->email='emmett@gmail.com';
        $user->phone_number = 2106678899;
        $user->is_admin = 1;
        $user->is_super_admin = 1;
        $user->password = Hash::make(env('USER_PASSWORD'));
        $user->image = "https://cdn.filestackcontent.com/vinjG28TRGS7TIBhtYwS";
        $user->save();

        $user1= new User();
        $user1->name = 'Cody Hastings';
        $user1->username = 'Cody';
        $user1->email='cody@gmail.com';
        $user1->phone_number = 2108839000;
        $user1->is_admin = 1;
        $user1->is_super_admin = 0;
        $user1->password = Hash::make(env('USER_PASSWORD'));
        $user1->save();

        $user2= new User();
        $user2->name = 'Avery Hankins';
        $user2->username = 'Aves';
        $user2->email='avery@gmail.com';
        $user2->phone_number = 2108839090;
        $user2->is_admin = 1;
        $user2->is_super_admin = 0;
        $user2->password = Hash::make(env('USER_PASSWORD'));
        $user2->save();


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
