<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Data_user_item;
use Illuminate\Support\Facades\Auth;

class Data_user_itemsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	//add new items to user
	public function addItems(Request $request)
	{
		$data = new \App\Data_user_item;
		$data->data_user_id = Auth::user()->id;
		$data->item_id = $request['item_id'];
		$data->quantity = '1';
		$data->save();
		return redirect('magazine');
	}
	
	//show all user items
	public function index()
	{
		$id = Auth::user()->id;
		$items = \App\Data_user_item::where('user_id', $id);
		return view('index')->with('items', $items);
		
	}
	
	public function edit($id)
	{
		return "sdsdsd";
	}
}
