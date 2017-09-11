<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\UserComment;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::user()->is_admin){
            $users = User::paginate(16);
            return view('users.index')->with(array('users' => $users));    
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $rules = array(
        // 'name' => 'required|max:255',
        //     'username' => 'required|max:255|unique:users',
        //     'email' => 'required|email|max:255|unique:users',
        //     'password' => 'required|confirmed|min:6'
        //     'image'=>'max:255',
        //     'phone_number'=>'required|min:10'
    // );

//    $this->validate($request, $rules);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $user = User::find($id);

        if(!$user){
            abort(404);
        }



        $data['user'] = $user;
        // $entries = \App\User::getEntries($user->id);
        // $newArr = [];
        // foreach ($entries as $entry){
        //     array_push($newArr, $entry->id);
        // }

        // $worldLotteryid = $newArr[0];

        // $raffleId = $newArr[1];

        // $lotteriesid = $newArr[2];

        // dd($worldLotteryid);

        // $data['entries'] = $entries;
        return view('users.show',$data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(\Auth::id() == $id || \Auth::user()->is_admin){
            $User = User::find($id);
            $data['User'] = $User;
            return view('Users.edit',$data);
        }

        return \Redirect::action('LotteriesController@index');

    }

    public function comment(Request $request, $id)
    {
        $comment = new UserComment();
        $comment->user_id = \Auth::id();
        $comment->content = $request->input('comment');
        $comment->save();
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

        // $this->validate($request, Post::$rules);
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->image = $request->image;
        // $user->user_id = \Auth::id();
        $user->save();
        // $request->session()->flash('successMessage', 'Your Post was a successfully updated!');
        
       return \Redirect::action('LotteriesController@index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $suggestions = $user->suggestions;

        foreach ($suggestions as $suggestion) {
            $suggestion->delete();
        }

        $user->delete();
        // $request->session()->flash('successMessage', 'Your user was a successfully destroyed!');

        return \Redirect::action('LotteriesController@index');
    }

    public function makeAdmin($id)
    {
        $user = User::findOrFail($id);


        $user->is_admin = 1;
        $user->save();

        // $request->session()->flash('successMessage', 'Your user was a successfully destroyed!');

        return \Redirect::action('UsersController@index');
    }

    public function destroyAdmin($id)
    {
        $user = User::findOrFail($id);

        $user->is_admin = 0;
        $user->save();

        return \Redirect::action('UsersController@index');
    }
}
