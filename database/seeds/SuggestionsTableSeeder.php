<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Suggestion;
class SuggestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $suggestion = new Suggestion();
        $suggestion->title = "Adding comments on suggestions.";
        $suggestion->content ="Hey there; I was just thinking it would be nice for your users to be able to comment on the suggestions in the suggestion box.";
        $suggestion->user_id = User::all()->random()->id;
        $suggestion->addressed = 0;
        $suggestion->save();

        $suggestion2 = new Suggestion();
        $suggestion2->title = "Yall should look into Hilarity for Charity.";
        $suggestion2->content ="An up and coming charity is called Hilarity for Charity. The work with several different organizations that do direct charity work.";
        $suggestion2->user_id = User::all()->random()->id;
        $suggestion2->addressed = 0;
        $suggestion2->save();
    
        
    }
}
