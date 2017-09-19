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

        $userComment8 = new \App\Models\UserComment();
        $userComment8->user_id = 4;
        $userComment8->content = "I think this site is awesome!";
        $userComment8->created_at = "2017-09-09 14:45:30";
        $userComment8->save();

        $userComment9 = new \App\Models\UserComment();
        $userComment9->user_id = 5;
        $userComment9->content = "So many different functionalities! so great!!!!";
        $userComment9->created_at = "2017-09-10 14:45:30";
        $userComment9->save();

        $userComment10 = new \App\Models\UserComment();
        $userComment10->user_id = 7;
        $userComment10->content = "I want to win the nissan GT-R";
        $userComment10->created_at = "2017-09-11 14:45:30";
        $userComment10->save();

        $userComment11 = new \App\Models\UserComment();
        $userComment11->user_id = 6;
        $userComment11->content = "That blue chrome is amazing";
        $userComment11->created_at = "2017-09-12 14:45:30";
        $userComment11->save();

        $userComment12 = new \App\Models\UserComment();
        $userComment12->user_id = 8;
        $userComment12->content = "Its all about that corvete man";
        $userComment12->created_at = "2017-09-13 14:45:30";
        $userComment12->save();

        $userComment13 = new \App\Models\UserComment();
        $userComment13->user_id = 6;
        $userComment13->content = "Thats not how you spell Corvette";
        $userComment13->created_at = "2017-09-14 14:45:30";
        $userComment13->save();

        $userComment14 = new \App\Models\UserComment();
        $userComment14->user_id = 8;
        $userComment14->content = "Grammar police alert!";
        $userComment14->created_at = "2017-09-15 14:45:30";
        $userComment14->save();

        $userComment15 = new \App\Models\UserComment();
        $userComment15->user_id = 9;
        $userComment15->content = "Great.... one of those guys";
        $userComment15->created_at = "2017-09-16 14:45:30";
        $userComment15->save();

        $userComment16 = new \App\Models\UserComment();
        $userComment16->user_id = 10;
        $userComment16->content = "Theres always one.";
        $userComment16->created_at = "2017-09-17 14:45:30";
        $userComment16->save();



    	
    }
}
