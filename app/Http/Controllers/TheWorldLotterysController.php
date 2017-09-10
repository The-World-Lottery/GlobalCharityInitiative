<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\TheWorldLottery;
use App\Models\TheWorldLotteryEntry;
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

        if(\Auth::check()){
            $currLottery = TheWorldLottery::find($id);
            $currLottery->current_value += 2;
            $currLottery->save();

            $userId = \Auth::id();
            $newEntry = new TheWorldLotteryEntry();
            $newEntry->user_id = $userId;
            $newEntry->the_world_lottery_id = $id;
            // $newEntry->first_num = $request->input('first_num');
            // $newEntry->second_num = $request->input('second_num');
            // $newEntry->third_num = $request->input('third_num');
            // $newEntry->fourth_num = $request->input('fourth_num');
            // $newEntry->fifth_num = $request->input('fifth_num');
            // $newEntry->key_num = $request->input('key_num');
            $newEntry->save();
        } else {
            $request->session()->flash('errorMessage', 'You must be LOGGED IN to purchase a ticket!');
            return \Redirect::action('Auth\AuthController@getLogin');
        }


        $request->session()->flash('successMessage', 'You have successfully purchased a ticket for THE WORLD LOTTERY! Thank you for your donation and good luck!');
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

        $lottery = Lottery::find($id);

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


        return view('theworldlottery.select');
    }

        public function storeNumbers(Request $request)
    {
        $requestArr = $request->input();

        $newArr = array_keys($requestArr);
        array_shift($newArr);
       dd($newArr);

       

        return view('theworldlottery.select');
    }
}
