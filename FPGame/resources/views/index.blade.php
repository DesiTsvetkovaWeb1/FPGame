@extends('layouts.app')
 @section('title')
  Game
 @endsection
 
 @section('content')
 <div id = "cont">
	 <div id="left_side">
	 	<img src="#" class="img-responsive img-rounded main_img " >
	 	@if(Auth::user())
	 			<a href = "#" class="btn-success btn-lg btn btn-center">Play</a>
		@endif
		 	<ul>
				@foreach($items as $item)
					<li class = index-image-li><img src = "{{\DB::table('Items')->where('id', $item)->value('image')}}"></li>
				@endforeach
		 	</ul>
	 	</div>

	 @if(Auth::user())
	 <div id = "right_side">
		 <div>Money</div>
		 <div>{{$data->money}}</div>
		 <div>Score</div>
		 <div>{{$data->score}}</div>
		 <div>Played game</div>
		 <div>{{$data->game_played}}</div>
		<div><a href="/magazine">Magazine</a></div>
		<div><a href="#">Online Shop</a></div>
		<div>My items
			<ul>
				
			</ul>
		</div>
		
	</div>
	 @endif
 </div>
 @endsection
 
 
