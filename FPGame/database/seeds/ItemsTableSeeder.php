<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    	DB::table('items')
    		->insert([
    				'type_id'=> '2',
    				'name'=> 'MyPistol',
    				'capacity' => '20',
    				'value' => '4',
    				'price' => '3',
    				'description' => 'Your default gun',
    				'image' => "url('https://www.google.bg/imgres?imgurl=http://www.ownedcssclan.8m.com/images/usp_tact_a.jpg&imgrefurl=http://www.ownedcssclan.8m.com/photo.html&h=236&w=315&tbnid=ipw26vF149Wv1M:&docid=zBeDJ-HNR4vodM&ei=mRz9VsyKEIKk6ASdzLa4Bw&tbm=isch&ved=0ahUKEwiMu4bt-urLAhUCEpoKHR2mDXcQMwghKAcwBw#h=236&w=315')"
    		]);
    	
    	
        DB::table('items')
        	->insert([
        			'type_id'=> '1',
        			'name'=> 'Bullet',
        			'capacity' => '0',
        			'value' => '0',
        			'price' => '3',
        			'description' => '',
        			'image' => "url('https://www.google.bg/imgres?imgurl=http://nobacks.com/wp-content/uploads/2014/11/Bullets-19.png&imgrefurl=http://nobacks.com/keywords/bullet/&h=270&w=256&tbnid=ZWew9Y3BnVzEDM:&docid=EaG5vaCKx7TOIM&ei=qR79Vpe4CKKE6QTdhLXQDw&tbm=isch&ved=0ahUKEwjXsOHo_OrLAhUiQpoKHV1CDfo4ZBAzCDgoNTA1#h=270&imgdii=ZWew9Y3BnVzEDM%3A%3BZWew9Y3BnVzEDM%3A%3BmyGB2vG7It7InM%3A&w=256')"
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '1',
        			'name'=> 'GoldBullet',
        			'capacity' => '0',
        			'value' => '4',
        			'price' => '6',
        			'description' => 'With GoldBullet you can cause more damage to the enemy',
        			'image' => "url('https://www.google.bg/imgres?imgurl=http://nobacks.com/wp-content/uploads/2014/11/Bullets-19.png&imgrefurl=http://nobacks.com/keywords/bullet/&h=270&w=256&tbnid=ZWew9Y3BnVzEDM:&docid=EaG5vaCKx7TOIM&ei=qR79Vpe4CKKE6QTdhLXQDw&tbm=isch&ved=0ahUKEwjXsOHo_OrLAhUiQpoKHV1CDfo4ZBAzCDgoNTA1#h=270&w=256')"
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '3',
        			'name'=> 'SmokeGranade',
        			'capacity' => '0',
        			'value' => '0',
        			'price' => '300',
        			'description' => 'Can be use to provide temporary covor for moving from place to place. Make you invisible for 10 sec',
        			'image' => "url('http://cka4atcs.ru/csimg/4169b89aa6d8dc24e85ec7621f516894.jpg')"
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '3',
        			'name'=> 'Granade',
        			'capacity' => '0',
        			'value' => '30',
        			'price' => '400',
        			'description' => 'A high-explosive device. Damage 30.',
        			'image' => "url('http://cka4atcs.ru/csimg/582b9aad4bb9f6a81738adf40639f923.jpg')"
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '2',
        			'name'=> '9X19MM SIDEARM',
        			'capacity' => '20',
        			'value' => '5',
        			'price' => '400',
        			'description' => 'The perfect weapon for beginners.',
        			'image' => "url('http://csrush.com/files/imagecache/in_post/files/glock.jpg')"
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '2',
        			'name'=> '228 COMPACT',
        			'capacity' => '25',
        			'value' => '6',
        			'price' => '600',
        			'description' => 'It is a moderately powerful semi-automatic pistol',
        			'image' => "url('http://2.bp.blogspot.com/_Mw1mvZxj_Sw/TI5WJU6oqDI/AAAAAAAAAAk/5f-dnU1vTw8/s1600/228+ccompact.jpg')"
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '2',
        			'name'=> 'CV 47',
        			'capacity' => '40',
        			'value' => '8',
        			'price' => '900',
        			'description' => 'It is one of the most powerful guns in the game known for its power and its range.',
        			'image' => "url('http://guides.freddyshouse.com/cs/weapons/images/mp5_a.jpg')"
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '2',
        			'name'=> 'M249',
        			'capacity' => '50',
        			'value' => '10',
        			'price' => '1300',
        			'description' => '',
        			'image' => "url('http://static2.cs-bg.net/images/articles/m249.jpg')"
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '4',
        			'name'=> 'ExtraLife10%',
        			'capacity' => '0',
        			'value' => '10',
        			'price' => '1500',
        			'description' => 'Gives you 10% extra life',
        			'image' => "url('http://dizma.net/image/data/10-percent.png')"
        	]);
        	
        	DB::table('items')
        	->insert([
        			'type_id'=> '4',
        			'name'=> 'ExtraLife15%',
        			'capacity' => '0',
        			'value' => '15',
        			'price' => '2000',
        			'description' => 'Gives you 15% extra life',
        			'image' => "url('http://bbj.hu/images2/201311/15-percentjp_20131115091018412.jpg')"
        	]);
        	
        	
    }
}
