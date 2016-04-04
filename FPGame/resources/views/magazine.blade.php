@extends('layouts.app')
 @section('title')
  Magazine 
 @endsection
 
 @section('content')
 
 <div id="btn-r"><a href="/index" class= "btn btn-primary">Back</a></div>
 
 <div id = "col">
	 <ul id= "double">
		 @foreach($items as $item)
			 @if($item->payed == 0 && $item->id > 1)
			 <form method = "post" action = "/magazine">
			 <input type="hidden" name="_token" value="{{ csrf_token() }}">
			 <input type= "hidden" name = "item_id" value = "{{$item->id}}">
				 <li id = '{{$item->id}}' class="li">
					 <div><b>Name:{{$item->name}}</b></div>
					 <div><img src = "{{$item->image}}"></div>
					 <div>Description: {{$item->description}}</div>
					 @if($item->type_id=='2' || $item->type_id=='3')
					 	<div>Demage:{{$item->value}}</div>
					 @endif
					 @if($item->type_id == '4')
					 	<div>Add:{{$item->value}}%</div>
					 @endif
					 <div>Price:{{$item->price}}</div>
					 <button type= "submit" class = "btn btn-primary">Buy</button>
				 </li>
			 @endif
			</form>
		 @endforeach
	 </ul>
 </div>
 @endsection