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

        DB::table('suggestions')->truncate();
        DB::table('users')->truncate();
        DB::table('lotterys')->truncate();
        DB::table('raffles')->truncate();


        $this->call('UsersTableSeeder');
        $this->call('SuggestionsTableSeeder');
        $this->call('RafflesTableSeeder');
        $this->call('LotterysTableSeeder');

        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        Model::reguard();
    }
}
