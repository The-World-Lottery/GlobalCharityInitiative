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
        $userComment7 = new \App\Models\UserComment();
        $userComment7->user_id = 3;
        $userComment7->content = "Apparently not...";
        $userComment7->save();

        $userComment6 = new \App\Models\UserComment();
        $userComment6->user_id = 1;
        $userComment6->content = "no nonsense in our chat boiiii";
        $userComment6->save();

        $userComment5 = new \App\Models\UserComment();
        $userComment5->user_id = 3;
        $userComment5->content = "lol, shut him down";
        $userComment5->save();

        $userComment4 = new \App\Models\UserComment();
        $userComment4->user_id = 1;
        $userComment4->content = "Im the super admin, now you cant say anything anymore.";
        $userComment4->save();

        $userComment3 = new \App\Models\UserComment();
        $userComment3->user_id = 3;
        $userComment3->content = "OOOOHHHHHHH";
        $userComment3->save();

        $userComment2 = new \App\Models\UserComment();
        $userComment2->user_id = 2;
        $userComment2->content = "How about nothing?";
        $userComment2->save();

        $userComment1 = new \App\Models\UserComment();
        $userComment1->user_id = 1;
        $userComment1->content = "the only question is... what to say next?";
        $userComment1->save();
        
        $userComment = new \App\Models\UserComment();
        $userComment->user_id = 1;
        $userComment->content = "Haha! The first comment on the world lottery!";
        $userComment->save();
    	
    }
}
