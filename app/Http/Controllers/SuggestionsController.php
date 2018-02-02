<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Suggestion;
use App\Models\Vote;
use Log;
use App\User;
use DB;

class SuggestionsController extends Controller
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
            $suggestions = Suggestion::search($q);    
        } else {
            $suggestions = Suggestion::with('user')->where('addressed','0')->paginate(20);  
        }


        $data['suggestions']= $suggestions;
        return view('suggestions.index',$data);
    }
    public function adminIndex()
    {
        if(\Auth::user()->is_admin){
            $suggestions = Suggestion::where('id','>',0)->paginate(16);
            return view('suggestions.admin')->with(array('suggestions' => $suggestions));    
        }
        return \Redirect::action('LotteriesController@index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suggestions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Suggestion::$rules);

        $title = $request->input('title');
        $content = $request->input('content');
        $suggestion = new Suggestion();
        $suggestion->title = $title;
        $suggestion->content = $content;
        $suggestion->user_id = \Auth::id();
        $suggestion->save();

        $request->session()->flash('successMessage', 'Suggestion created');

        // Log::info("$title, $content, $url");

        return redirect()->action('SuggestionsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suggestion = Suggestion::find($id);

        if(!$suggestion){
            abort(404);
        }

        $data['suggestion'] = $suggestion;
        return view('suggestions.show',$data);
    }

    public function userssuggestions()
    {   
        $id = \Auth::id();

        if(User::find($id) ===null)
        {
            abort(404);
        };

        $suggestions = User::find($id)->suggestions;

        $data['suggestions'] = $suggestions;
        return view('suggestions.userssuggestions',$data);
    }

    public function highest()
    {
        $suggestions = DB::table('suggestions')
                    ->where('addressed','0')
                    ->leftJoin('votes', 'votes.suggestion_id', '=', 'suggestions.id')
                    ->select(DB::raw('count(votes.id) as totalvotes, votes.suggestion_id, suggestions.id'))
                    ->groupBy('votes.suggestion_id')
                    ->orderBy('totalvotes', 'desc')
                    ->take(5)
                    ->get();

        $suggObjs = array();
        foreach ($suggestions as $suggest) {
            $suggObjs[] = Suggestion::find($suggest->id);
        }

        $data['suggestions']= $suggObjs;
        return view('suggestions.highest', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $suggestion = Suggestion::find($id);

        if(\Auth::id() == $suggestion->user_id || \Auth::user()->is_admin){ 
            if(!$suggestion){
                abort(404);
            }
            $data['suggestion'] = $suggestion;
            return view('suggestions.edit',$data);
        } else {
            header('Location:/suggestions');
        }
    }

    public function upvote($id)
    {
        $suggestion = Suggestion::find($id);
        $user_id = \Auth::id();
        $suggestion_id = Suggestion::find($id)->id;
        $currVotes = Vote::where('suggestion_id',$id)->where('user_id',$user_id)->get();

        $hasOtherVote = false;

        if(!$currVotes->isEmpty()){
            if($currVotes[0]['vote'] == -1){
                $hasOtherVote = true;
                $vote = Vote::find($currVotes[0]['id']);
                $vote->vote = 1;
                $vote->save();
            }
        } elseif ($currVotes->isEmpty() || $hasOtherVote) {
            $vote = new Vote;
            $vote->user_id = $user_id;
            $vote->suggestion_id = $suggestion_id;
            $vote->vote = 1;
            $vote->save();
        };

        return \Redirect::action('SuggestionsController@index');
    }

    public function downvote($id)
    {
        $suggestion = Suggestion::find($id);
        $user_id = \Auth::id();
        $suggestion_id = Suggestion::find($id)->id;
        $currVotes = Vote::where('suggestion_id',$id)->where('user_id',$user_id)->get();
    
        $hasOtherVote = false;

        if(!$currVotes->isEmpty()){
            if($currVotes[0]['vote'] == 1){
                $hasOtherVote = true;
                $vote = Vote::find($currVotes[0]['id']);
                $vote->vote = -1;
                $vote->save();
            }
        } elseif ($currVotes->isEmpty() || $hasOtherVote) {
            $vote = new Vote;
            $vote->user_id = $user_id;
            $vote->suggestion_id = $suggestion_id;
            $vote->vote = -1;
            $vote->save();
        };

        return \Redirect::action('SuggestionsController@index');
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
        $this->validate($request, Suggestion::$rules);

        $suggestion = Suggestion::find($id);

        if(!$suggestion){
            abort(404);
        }

        $suggestion->title = $request->title;
        $suggestion->content =$request->content;
        $suggestion->save();

        $request->session()->flash('successMessage', 'Suggestion updated');

        return \Redirect::action('SuggestionsController@show', $suggestion->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $suggestion = Suggestion::find($id);

        if(!$suggestion){
            abort(404);
        }

        $suggestion->delete();
        $request->session()->flash('successMessage', 'Suggestion deleted');
        return redirect()->action('SuggestionsController@index');
    }

    public function closeAddress($id)
    {
        $suggestion = Suggestion::findOrFail($id);

        if(!$suggestion){
            abort(404);
        }

        $suggestion->addressed = 1;
        $suggestion->save();

        return \Redirect::action('SuggestionsController@adminIndex');

    }

    public function openAddress($id)
    {
        $suggestion = Suggestion::findOrFail($id);

        if(!$suggestion){
            abort(404);
        }

        $suggestion->addressed = 0;
        $suggestion->save();

        return \Redirect::action('SuggestionsController@adminIndex');

    }







}
