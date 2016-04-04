<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Schema;

class Data_usersController extends Controller
{
	
	public function __construct()
	{
		$this->middleware('auth');
	}
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$user_id = \Auth::id();
    	$data = \App\Data_user::findOrFail($user_id);
    	$items = \DB::table('Data_user_item')->where('data_user_id',$user_id)->lists('item_id');
    	
    	return view('index')->with('data', $data)->with('items', $items); 
    }

 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$data = \App\Data_user::findOrFail($id);
    	return $data;
    	
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
        $data = \App\Data_user::findOrFail($id);
        $data->update($request->all());
        return redirect('index')->with('data',$data);
    }

}
