<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('posts')->truncate();
        DB::table('users')->truncate();


        $this->call('UsersTableSeeder');
        $this->call('SuggestionsTableSeeder');

        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        Model::reguard();
    }
}
