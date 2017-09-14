<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GameTimeCheck extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'game:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checks if end_date has been hit';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $now = date('Y-m-d H:i:s');

        $raffles = \App\Models\Raffle::raffleFunction($now);
        $lottos = \App\Models\Lottery::lotteryFunction($now);
        $worldLotto = \App\Models\TheWorldLottery::TheWorldLotteryFunction($now);
        foreach ($raffles as $raffle) {
            if(isset($raffle->id)){
                \App\Models\Raffle::raffleWin($raffle->id);
            }
        }
        foreach ($lottos as $lotto) {
            if(isset($lotto->id)){
                \App\Models\Lottery::lotteryWin($lotto->id);
            }
        }
            if(isset($worldLotto->id)){
                \App\Models\TheWorldLottery::TheWorldlotteryWin($worldLotto->id);
            }
        }
        
    }
}
