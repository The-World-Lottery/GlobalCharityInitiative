<?php

use Illuminate\Database\Seeder;

class UserCommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1;$i <= 5;$i++) {

       	$userComment = new \App\Models\UserComment();
        $userComment->user_id = 1;
        $userComment->content = "this is some comment content";
        $userComment->save();
    	}
    }
}
