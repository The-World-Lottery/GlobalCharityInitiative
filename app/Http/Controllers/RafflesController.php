<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Raffle As RiffRaff;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
            $raffles = RiffRaff::search($q);    
        } else {
            $raffles = RiffRaff::with('user')->paginate(6);  
        }
        

        $data['raffles']= $raffles;
        return view('raffles.index',$data);
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
        $end_date = $request->input('end-date');
        $product = $request->input('product');
        $date = \DateTime::createFromFormat('n/j/Y', $end_date);
        $end_date = $date->format('Y-m-d H:i:00');
        $raffle = new RiffRaff();
        $raffle->title = $title;
        $raffle->content = $content;
        $raffle->product = $product;
        $raffle->end_date = $end_date;
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
         $raffle = RiffRaff::find($id);

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
         $raffle = RiffRaff::find($id);

        if(\Auth::id() == $raffle->user_id){ 
            if(!$raffle){
                abort(404);
            }
            $data['raffle'] = $raffle;
            return view('Raffles.edit',$data);
        } else {
            header('Location:/Raffles');
        }
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

        return \Redirect::action('LotteriesController@show', $lottery->id);
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

    public function runRaffle(){

    }
}
