<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\TheWorldLottery;
use App\Models\TheWorldLotteryEntry;
use App\Models\UserWallet;
use Log;
use App\User;
use DB;


class TheWorldLotterysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theWorldLottery = TheWorldLottery::find(1);
        return view('theworldlottery.index')->with(array('theWorldLottery' => $theWorldLottery));

        // return view('theworldlottery.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theworldlottery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, Suggestion::$rules);

        $title = $request->input('title');
        $content = $request->input('content');
        $init_value = $request->input('init_value');
        $end_date = $request->input('end_date');
        $lottery = new Lottery();
        $lottery->title = $title;
        $lottery->content = $content;
        $lottery->init_value = $init_value;
        $lottery->current_value = $init_value;
        $lottery->end_date = $end_date;
        $lottery->user_id = \Auth::id();
        $lottery->save();

        // $request->session()->flash('successMessage', 'Suggestion created');

        // Log::info("$title, $content, $url");

        return redirect()->action('TheWorldLotterysController@index');
    }

    public function addUserToEntries(Request $request, $id)
    {

        return \Redirect::action('TheWorldLotterysController@selectNumbers');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $theWorldLottery = TheWorldLottery::find($id);

        if(\Auth::user()->is_admin){ 
            if(!$theWorldLottery){
                abort(404);
            }
            $data['theworldlottery'] = $theWorldLottery;
            return view('theworldlottery.edit',$data);
        } 
            return \Redirect::action('TheWorldLotterysController@index');
        
     
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

        $lottery = TheWorldLottery::find($id);

        if(!$lottery){
            abort(404);
        }

        $title = $request->input('title');
        $content = $request->input('content');
        $init_value = $request->input('init_value');
        $end_date = $request->input('end_date');
        $lottery->title = $title;
        $lottery->content = $content;
        $lottery->init_value = $init_value;
        $lottery->end_date = $end_date;
        $lottery->save();

        // $request->session()->flash('successMessage', 'lottery updated');

        return \Redirect::action('TheWorldLotterysController@index', $lottery->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function selectNumbers()
    {
        $theWorldLottery = TheWorldLottery::orderBy('id','desc')->limit(1)->get()[0];
        // var_dump($theWorldLottery);
        return view('theworldlottery.select')->with(array('theWorldLottery' => $theWorldLottery));
    }

    public function storeNumbers(Request $request)
    {
        if(!\Auth::check()){
            $request->session()->flash('errorMessage', 'You must be LOGGED IN to purchase a ticket!');
            return \Redirect::action('Auth\AuthController@getLogin');
        } else {
            $requestArr = $request->input();

            $powerNum = $requestArr['powerNumber'];

            $newArr = array_keys($requestArr);
            array_shift($newArr);
            if(count($newArr) != 10)
            {
                $request->session()->flash('errorMessage', 'You must select 5 numbers AND a POWER NUMBER!');
                return \Redirect::action('TheWorldLotterysController@selectNumbers');
            } else {
                try {
                    \Stripe\Stripe::setApiKey("sk_test_ZzKGRiePc0b4mGyYiwkRnPEy");

                    $token = \Input::get('stripeToken');
                    $amount = \Input::get('amount');

                    $userId = \Auth::id();
                    $charge = \Stripe\Charge::create(array(
                            "amount"=> $amount,
                            "currency"=>"usd",
                            "card"=> $token,
                            "description"=>$userId ));

                    $currLottery = TheWorldLottery::orderBy('id','desc')->limit(1)->get()[0];
                    $currLottery->current_value += 2;
                    $currLottery->save();

                    $entry = new TheWorldLotteryEntry();
                    $entry->first_num = $newArr[0];
                    $entry->second_num = $newArr[1];
                    $entry->third_num = $newArr[2];
                    $entry->fourth_num = $newArr[3];
                    $entry->fifth_num = $newArr[4];
                    $entry->key_num = $powerNum;
                    $entry->user_id = \Auth::id();
                    $entry->the_world_lottery_id = TheWorldLottery::orderBy('id','desc')->limit(1)->get()[0]['id'];
                    $entry->save();

                } catch (\Stripe\Error\Card $e){
                    dd($e);
                }
            $request->session()->flash('successMessage', 'You have successfully purchased a GLOBAL CHARITY DRAWING ticket! Thank you for your donation and good luck!');
            return \Redirect::action('TheWorldLotterysController@selectNumbers');
            }
        }
    }
}
