<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WorldLottoCheck    extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'world:check';

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
        if(\App\Models\TheWorldLottery::orderBy('id','desc')->limit(1)->get()[0]['end_date'] <= date('Y-m-d H:i:s')){
            $id = \App\Models\TheWorldLottery::orderBy('id','desc')->limit(1)->get()[0]['id'];
            \App\Models\TheWorldLottery::TheWorldLotteryWin($id);              
        }
    }
}