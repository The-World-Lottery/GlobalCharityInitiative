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
        $userComment7->content = "I don't know =]";
        $userComment7->created_at = "2017-09-08 14:45:30";
        $userComment7->save();

        $userComment6 = new \App\Models\UserComment();
        $userComment6->user_id = 1;
        $userComment6->content = "lol then why did you ask?";
        $userComment6->created_at = "2017-09-07 14:45:30";
        $userComment6->save();

        $userComment5 = new \App\Models\UserComment();
        $userComment5->user_id = 3;
        $userComment5->content = "No.";
        $userComment5->created_at = "2017-09-06 14:45:30";
        $userComment5->save();

        $userComment4 = new \App\Models\UserComment();
        $userComment4->user_id = 1;
        $userComment4->content = "No, have you?";
        $userComment4->created_at = "2017-09-05 14:45:30";
        $userComment4->save();

        $userComment3 = new \App\Models\UserComment();
        $userComment3->user_id = 3;
        $userComment3->content = "Have you ever drove a Tesla?";
        $userComment3->created_at = "2017-09-04 14:45:30";
        $userComment3->save();

        $userComment2 = new \App\Models\UserComment();
        $userComment2->user_id = 2;
        $userComment2->content = "The tesla is nice but I would rather have a day with Mr. Jackson";
        $userComment2->created_at = "2017-09-03 14:45:30";
        $userComment2->save();

        $userComment1 = new \App\Models\UserComment();
        $userComment1->user_id = 1;
        $userComment1->content = "I really hope I win the tesla!!!!";
        $userComment1->created_at = "2017-09-02 14:45:30";
        $userComment1->save();
        
        $userComment = new \App\Models\UserComment();
        $userComment->user_id = 1;
        $userComment->content = "Wow, this looks great";
        $userComment->created_at = "2017-09-01 14:45:30";
        $userComment->save();
    	
    }
}
