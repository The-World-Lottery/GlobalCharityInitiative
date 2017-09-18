<?php

use Illuminate\Database\Seeder;

class RafflesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i = 0;$i <= 20;$i++) 
        {
           	$raffle= new \App\Models\Raffle();
            $raffle->title = 'Raffle #'. $i;
            $raffle->content = 'for charity'.$i;
            $raffle->product ='A product donated by company # '.$i . ' to advertise their business.';
           if($i < 9)
           {
            	$raffle->end_date = date("Y-m-d ") .'0'. $i .':00:00';
        	}
        	else
            {
        		$raffle->end_date = date("Y-m-d ") . $i .':00:00';
        	}

            $raffle->user_id = 1;
            $raffle->save();
        }
        
        $j = 19;
        
        $raffle1= new \App\Models\Raffle();
        $raffle1->title = 'A Day With Samuel L. Jackson';
        $raffle1->content = 'Hilarity for Charity';
        $raffle1->product ='Samuel L. Jackson has put aside a day to the winner shadow him on the set of Avengers 4';
        $raffle1->end_date = date("Y-m-") . $j ." 12:00:00";
        $raffle1->img = "/images/samuel.jpg";
        $raffle1->user_id = 1;
        $raffle1->save();

        $raffle2= new \App\Models\Raffle();
        $raffle2->title = '2018 Corvette Stingray';
        $raffle2->content = 'The World Lottery Foundation';
        $raffle2->product ='Chevrolet has donated one of their new 2018 Stingrays for us to raffle off.';
        $raffle2->end_date = date("Y-m-") . ($j + 1) ." 12:00:00";
        $raffle2->img = "/images/corvette.png";
        $raffle2->user_id = 1;
        $raffle2->save();

        $raffle3= new \App\Models\Raffle();
        $raffle3->title = 'Music Video Appearance';
        $raffle3->content = 'The World Lottery Foundation';
        $raffle3->product ='Justin Beiber has offered to include one fan in his next music videos';
        $raffle3->end_date = date("Y-m-") . ($j + 2) ." 12:00:00";
        $raffle3->img = "/images/justin.png";
        $raffle3->user_id = 1;
        $raffle3->save();

        $raffle4= new \App\Models\Raffle();
        $raffle4->title = '4 days at Disney Land (for 4)';
        $raffle4->content = 'American Cancer Society';
        $raffle4->product ='Disney Land has donated an all-expense-paid visit to their amazing park!';
        $raffle4->end_date = date("Y-m-") . ($j + 4) ." 12:00:00";
        $raffle4->img = "/images/disney.png";
        $raffle4->user_id = 1;
        $raffle4->save();

        $raffle5= new \App\Models\Raffle();
        $raffle5->title = 'Lifetime Dave&Busters Gamecard';
        $raffle5->content = 'The World Lottery Foundation';
        $raffle5->product ='D&B has donated a one-of-a-kind limitless gamecard';
        $raffle5->end_date = date("Y-m-") . ($j + 5) ." 12:00:00";
        $raffle5->img = "/images/dandb.png";
        $raffle5->user_id = 1;
        $raffle5->save();

        $raffle6= new \App\Models\Raffle();
        $raffle6->title = 'Tesla Sport';
        $raffle6->content = 'Tesla Foundation';
        $raffle6->product ='Tesla had donated their newest sportscar model';
        $raffle6->end_date = date("Y-m-") . ($j + 6) ." 12:00:00";
        $raffle6->img = "/images/tesla.png";
        $raffle6->user_id = 1;
        $raffle6->save();

        $raffle7= new \App\Models\Raffle();
        $raffle7->title = 'Tesla Sport';
        $raffle7->content = 'Tesla Foundation';
        $raffle7->product ='Tesla had donated their newest sportscar model';
        $raffle7->end_date = date("Y-m-") . ($j + 6) ." 12:00:00";
        $raffle7->img = "/images/tesla.png";
        $raffle7->user_id = 1;
        $raffle7->save();


    }
}
