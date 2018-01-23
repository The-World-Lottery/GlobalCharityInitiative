<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Raffle;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\RaffleEntry;
use App\Models\TheWorldLottery;
use App\Models\UserWallet;
use Carbon\Carbon;
use Log;
use App\User;
use DB;


class RafflesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('q')){
            $q = $request->q;
            $raffles = Raffle::search($q);    
        } else {
            $raffles = Raffle::with('user')->where('end_date','>',\Carbon\Carbon::now())->orderBy('end_date','asc')->paginate(16);
        }
        

        $data['raffles']= $raffles;
        return view('raffles.index',$data);
    }

    public function adminIndex()
    {
        if(\Auth::user()->is_admin){
            $raffles = Raffle::paginate(16);
            return view('raffles.admin')->with(array('raffles' => $raffles));
        }
        return \Redirect::action('LotteriesController@index');
    }

    public function chargeCard(Request $request, $id, $count)
    {

        if(!\Auth::check()){
            $request->session()->flash('errorMessage', 'You must be LOGGED IN to purchase a ticket!');
            return \Redirect::action('Auth\AuthController@getLogin');
        }

        \Stripe\Stripe::setApiKey("sk_test_ZzKGRiePc0b4mGyYiwkRnPEy");

        $token = \Input::get('stripeToken');

        try {
            $userId = \Auth::id();
            $charge = \Stripe\Charge::create(array(
                    "amount"=> 500 * $count,
                    "currency"=>"usd",
                    "card"=> $token,
                    "description"=>$userId,
                ));

            $twlWallet = UserWallet::find(1);
            $twlWallet->usd += 2.5;
            $twlWallet->save();

            $currWorldLottery = TheWorldLottery::orderBy('id','desc')->limit(1)->get()[0];
            $currWorldLottery->current_value += 2.05;
            $currWorldLottery->save();

            for ($i = 0; $i < $count; $i++){
                $newEntry = new RaffleEntry();
                $newEntry->user_id = $userId;
                $newEntry->raffles_id = $id;
                $newEntry->save();
            }

        } catch (\Stripe\Error\Card $e){
            dd($e);
        }

        $request->session()->flash('successMessage', 'You have successfully purchased ' . $count . ' Raffle Ticket(s)');
        return \Redirect::action('RafflesController@index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('raffles.create');
    }

    public function notLoggedIn(Request $request)
    {

        // $currency = $request->input()['currency'];

        // if(\Auth::check()){

        //     switch ($currency){
        //         case "usd":
        //         $currConv = 1;
        //         break;
        //         case "eur":
        //         $currConv = $request->input()['eurConv'];
        //         break;
        //         case "jpy":
        //         $currConv = $request->input()['jpyConv'];
        //         break;
        //         case "gbp":
        //         $currConv = $request->input()['gbpConv'];
        //         break;
        //         case "chf":
        //         $currConv = $request->input()['chfConv'];
        //         break;
        //         case "btc":
        //         $currConv = $request->input()['btcConv'];
        //         break;
        //         case "ltc":
        //         $currConv = $request->input()['ltcConv'];
        //         break;
        //         case "eth":
        //         $currConv = $request->input()['ethConv'];
        //         break;
        //         case "doge":
        //         $currConv = $request->input()['dogeConv'];
        //         break;
        //         case "bch":
        //         $currConv = $request->input()['bchConv'];
        //         break;
        //         case "xrp":
        //         $currConv = $request->input()['xrpConv'];
        //         break;

        //     }

        //     $userId = \Auth::id();

        //     $userWallet = UserWallet::find($userId);
        //     $userWallet->$currency -= (2 * $currConv);
        //     $userWallet->save();

        //     $twlWallet = UserWallet::find(1);
        //     $twlWallet->usd += 1;
        //     $twlWallet->save();

        //     $newEntry = new RaffleEntry();
        //     $newEntry->user_id = $userId;
        //     $newEntry->raffles_id = $id;
        //     $newEntry->save();

        //     $currWorldLottery = TheWorldLottery::find(1);
        //     $currWorldLottery->current_value += .90;
        //     $currWorldLottery->save();
        // } else {

        $request->session()->flash('errorMessage', 'You must be LOGGED IN to purchase a ticket!');
        return \Redirect::action('Auth\AuthController@getLogin');
        // }
        // $request->session()->flash('successMessage', 'You have successfully purchased a RAFFLE ticket! Thank you for your donation and good luck!');
        // return \Redirect::action('RafflesController@index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        $end_date = $request->input('end_date') . " " . $request->input('end_time') . ":00";
        $product = $request->input('product');
        $image = $request->input('image');
        $image = str_replace('"',"",$image);
        // $end_date = str_replace("T","",$end_date);
        $raffle = new Raffle();
        $raffle->winner_id = null;
        $raffle->title = $title;
        $raffle->content = $content;
        $raffle->product = $product;
        $raffle->end_date = $end_date;
        $raffle->img = $image;
        $raffle->user_id = \Auth::id();
        if(\Auth::user()->is_admin){
            $raffle->save();
        }

        return redirect()->action('RafflesController@show',$raffle->id);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $raffle = Raffle::find($id);

        if(!$raffle){
            abort(404);
        }

        $data['raffle'] = $raffle;
        return view('raffles.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $raffle = Raffle::find($id);

        if(\Auth::user()->is_admin){ 
            if(!$raffle){
                abort(404);
            }
            $data['raffle'] = $raffle;
            return view('Raffles.edit',$data);
        }
            return \Redirect::action('LotteriesController@index');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request, Suggestion::$rules);

        $raffle = Raffle::find($id);

        if(!$raffle){
            abort(404);
        }

        $title = $request->input('title');
        $content = $request->input('content');
        $product = $request->input('product');
        $end_date = $request->input('end_date');
        $raffle->title = $title;
        $raffle->content = $content;
        $raffle->product = $product;
        $raffle->end_date = $end_date;
        $raffle->save();

        // $request->session()->flash('successMessage', 'lottery updated');

        return \Redirect::action('RafflesController@show', $raffle->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $raffle = Raffle::find($id);

        if(!$raffle){
            abort(404);
        }

        $raffle->delete();
        $request->session()->flash('successMessage', 'raffle deleted');
        return redirect()->action('RafflesController@index');
    }
    

    public function runRaffle(){

    }
}
