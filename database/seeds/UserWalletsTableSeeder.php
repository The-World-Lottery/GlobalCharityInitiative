<?php

use Illuminate\Database\Seeder;

class UserWalletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1;$i <= 13;$i++) {
	       	$newUserWallet = new \App\Models\UserWallet();
	        $newUserWallet->user_id = $i;
	        $newUserWallet->usd = random_int(0, 100);
	        $newUserWallet->eur = random_int(0, 100);
	        $newUserWallet->jpy = random_int(0, 100);
	        $newUserWallet->gbp = random_int(0, 100);
	        $newUserWallet->chf = random_int(0, 100);
	        $newUserWallet->btc = random_int(0, 100);
	        $newUserWallet->ltc = random_int(0, 100);
	        $newUserWallet->eth = random_int(0, 100);
	        $newUserWallet->doge = random_int(0, 100);
	        $newUserWallet->bch = random_int(0, 100);
	        $newUserWallet->xrp = random_int(0, 100);
	        $newUserWallet->save();
    	}
    }
}
