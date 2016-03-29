@extends('layouts.base')

@section('title')
    Magazine
@endsection

@section('content')
			<!-- <label>Money: 100</label> -->

			<div class="table-responsive">
	    			<table class="mytable">
	    				<tr>
	    					<td>
	    						<table>
				    				<tr>
				    					<td>
				    						<label class="text">Bullets</label>
				    						<div><img src="#" ></div>
				    					</td>
				    					<td>
				    						<p>Price: 4</p>
											<input type="range" class="myRange" value="100"  >
											<button type="button" class="btn btn-primary">Buy</button>
				    					</td>
				    				</tr>
				    			</table>
				    		</td>
				    		<td>
				    		<table>
								<tr>
									<td>
										<label class="text">GoldBullets</label>
										<div><img src="#" ></div>
									</td>
									<td>
										<p>Price: 6</p>
				    						<input type="range" class="myRange" value="100">
										<button type="button" class="btn btn-primary">Buy</button>
									</td>
								</tr>
							</table>
							</td>
						</tr>
	
						<tr>
	    					<td>
	    						<table>
				    				<tr>
				    					<td>
				    						<label class="text">Smoke Grande</label>
	    									<div><img src="#"></div>
				    					</td>
				    					<td>
				    						<p>Price: 300</p>
				    						<p>Description: Can be use to provide temporary covor for moving from place to place. Make you invisible for 10 sec</p>
				    						<button type="button" class="btn btn-primary">Buy</button>
				    					</td>
				    				</tr>
				    			</table>
				    		</td>
				    		<td>
				    		<table>
								<tr>
									<td>
										<label class="text">Granade</label>
	    								<div><img src="#"></div>
									</td>
									<td>
										<p>Price: 400</p>
				    					<p>Description: A high-explosive device. Damage 30.</p>	
										<button type="button" class="btn btn-primary">Buy</button>
									</td>
								</tr>
							</table>
							</td>
						</tr>
						
							<tr>
	    					<td>
	    						<table>
				    				<tr>
				    					<td>
				    						<label class="text">9X19MM SIDEARM</label>
	    									<div><img src="#"></div>
				    					</td>
				    					<td>
				    						<p>Price: 500</p>
				    						<p>Capacity: 20 rounds</p>
				    						<p>Demage: 5/7(with Gold Bullet)</p>
				    						<button type="button" class="btn btn-primary">Buy</button>
				    					</td>
				    				</tr>
				    			</table>
				    		</td>
				    		<td>
				    		<table>
								<tr>
									<td>
										<label class="text">228 COMPACT</label>
	    								<div><img src="#"></div>
									</td>
									<td>
										<p>Price: 600</p>
										<p>Capacity: 35 rounds</p>
				    					<p>Demage: 8/10(with Gold Bullet)</p>
										<button type="button" class="btn btn-primary">Buy</button>
									</td>
								</tr>
							</table>
							</td>
						</tr>
						
						<tr>
	    					<td>
	    						<table>
				    				<tr>
				    					<td>
				    						<label class="text">CV 47</label>
	    									<div><img src="#"></div>
				    					</td>
				    					<td>
				    						<p>Price: 900</p>
				    						<p>Capacity: 50</p>
				    						<p>Demage: 8/10(with Gold Bullet)</p>
				    						<button type="button" class="btn btn-primary">Buy</button>
				    					</td>
				    				</tr>
				    			</table>
				    		</td>
				    		<td>
				    		<table>
								<tr>
									<td>
										<label class="text">M249</label>
	    								<div><img src="#"></div>
									</td>
									<td>
										<p>Price: 1600</p>
				    					<p>Capacity: 100 rounds</p>
				    					<p>Damage: 10/12(with Gold Bullet)</p>	
										<button type="button" class="btn btn-primary">Buy</button>
									</td>
								</tr>
							</table>
							</td>
						</tr>
	
						<tr>
	    					<td>
	    						<table>
				    				<tr>
				    					<td>
				    						<label class="text">ExtraLife</label>
				    						<label class="text">5%</label>
				    					</td>
				    					<td>
				    						<p>Buy for 1500</p>
											<button type="button" class="btn btn-primary">Buy</button>
				    					</td>
				    				</tr>
				    			</table>
				    		</td>
				    		<td>
				    			<table>
									<tr>
										<td>
											<label class="text">ExtraLife</label>
											<label class="text">10%</label>
										</td>
										<td>
											<p>Buy for 2500</p>
											<button type="button" class="btn btn-primary">Buy</button>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>
@endsection
